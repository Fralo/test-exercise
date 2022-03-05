<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UploadController extends Controller
{
    public function store(Request $request) {

        $validatedData = $request->validate([
            'file-name' => ['required', 'max:10'],
            'image' => ['required', 'mimes:png,jpg', 'max:1024'],
        ]);

        $path = $validatedData['image']->storeAs('uploaded',  $this->getFileName($validatedData['file-name'], $validatedData['image']->extension()));
        
        return view('success', [
            'savedPath' => $path
        ]);
    }

    private function getFileName($name, $ext) {
        if(str_ends_with($name, $ext)) {
            return $name;
        }
        return $name . '.' . $ext;
    }
}
