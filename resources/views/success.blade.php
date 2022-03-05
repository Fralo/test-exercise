@extends('layout')
@section('content')
    <div class="success">
        <h1>Hai caricato correttamente il file !</h1>
        <div>
            Il file è stato correttamente salvato sotto <i>"{{ $savedPath }}"</i>
        </div>
        <a href="/">Caricane un altro</a>
    </div>
@endsection
