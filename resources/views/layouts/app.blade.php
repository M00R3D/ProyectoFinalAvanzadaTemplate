<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    @vite('resources/js/app.js') <!-- This will load Vite's compiled JS and CSS -->
</head>
<body>
    <div id="app">
        @yield('content') <!-- This is where the page-specific content will go -->
    </div>
</body>
</html>
