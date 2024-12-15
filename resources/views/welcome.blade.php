<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BISINDO Sign Language Learning</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto text-center py-10">
        <h1 class="text-4xl font-bold">Welcome to BISINDO Sign Language Learning</h1>
        <a href="/learn" class="mt-5 inline-block bg-blue-500 text-white py-2 px-4 rounded">Start Learning</a>
    </div>
</body>
</html>