<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    @endphp

    @foreach($manifest['resources/scripts/main.ts']['css'] ?? [] as $path)
        <link rel="stylesheet" href="/build/{{$path}}">
    @endforeach

    <script type="module" src="/build/{{$manifest['resources/scripts/main.ts']['file']}}"></script>
</head>
<body>
    <div id="app"></div>
</body>
</html>
