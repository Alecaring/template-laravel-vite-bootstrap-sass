<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
    
</head>
<body>
    <button class="btn btn-primary">Pulsante di esempio</button>
    <img src="{{ Vite::asset('resources/img/prova.webp') }}" alt="">
</body>
</html>