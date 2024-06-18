<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @filamentStyles
  @vite('resources/css/app.css')
</head>
<body class="dark bg-white dark:bg-gray-950">
    {{$slot}}
    @filamentScripts
    @vite('resources/js/app.js')
</body>
</html>