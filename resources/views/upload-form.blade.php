@extends('layout')
@section('content')
    <form class="main-form" method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <div>
        <label for="file-name">Nome del file</label>

        <input id="file-name" name="file-name" type="text" placeholder="nome dell'immagine da caricare"
            value="{{ old('file-name') }}">

        @error('file-name')
            <div class="error">{{ $message }}</div>
        @enderror
        </div>
        <div>
            <label for="image">Seleziona il file da caricare</label>
            <input type="file" id="image" name="image" accept="image/png, image/jpeg">

            @error('image')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Invia</button>
    </form>
@endsection
