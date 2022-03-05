<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf

        <label for="file-name">Nome del file</label>

        <input id="file-name" name="file-name" type="text">

        @error('file-name')
            <div>{{ $message }}</div>
        @enderror

        <label for="image">Seleziona il file da caricare</label>
        <input type="file" id="image" name="image" accept="image/png, image/jpeg">

        @error('image')
            <div>{{ $message }}</div>
        @enderror
        <button type="submit">Invia</button>
    </form>
</body>

</html>
