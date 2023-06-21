<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
</head>

<body>
    <x-header />
    <div id="app">
        <h1>Welcome </h1>
    </div>

    <x-footer name="welcome" />


</body>

</html>
