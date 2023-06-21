<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>

<body>
    <x-header />
    <div id="app">
        @if (isset($firstname))
            <h1>Welcome user {{ $firstname }} </h1>


            @if (isset($posts))
                <h2>Posts Viewed </h2>
                @foreach ($posts as $post)
                    <h3>{{ $post }} </h3>
                @endforeach
            @endif

            <br />
            Additional variable information : {{ var_dump($firstname) }}
        @else
            <h1> No user detected in the profile page </h1>
        @endif
    </div>

    <x-footer name="about" />

</body>

</html>
