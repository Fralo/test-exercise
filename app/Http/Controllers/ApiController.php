<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function index() {
        $files = collect(Storage::files(config('app.upload_path')));
        $result = $files->map(function ($file, $key) {
            return $this->getFileInfo($file);
        });
        return response()->json($result);
    }

    private function getFileInfo($file) {
        $fileName = basename($file);
        $fileSize = Storage::size($file);
        $fileLastModified = new Carbon(Storage::lastModified($file));

        return [
            'name' => $fileName,
            'size' => $fileSize,
            'last_modified' => $fileLastModified->toDateTimeString(),
        ];
    }
}
