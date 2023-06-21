<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>

<body>
    <x-header />

    <div id="app">
        <h1 class=''>
            @if (isset($user))
                contact information for {{ $user }}
            @else
                No user Information given
            @endif
        </h1>
        <br />
        <p class=''>
            The current url you are in is {{ URL::current() }}
        </p>


        <form class='' action="{{ URL::to('/save_data') }}" method="post"
            style="display: flex; flex-direction : column; gap: 3rem;">
            <input type="text" placeholder="username" />
            <textarea name="userinfo" placeholder="comment" rows="18"> </textarea>
        </form>




        <button>
            <a class='' href="/" style="text-decoration : none;">
                Go back
            </a>
        </button>

        <button>
            <a class='' href="/" style="text-decoration : none;">
                About page
            </a>
        </button>


    </div>
    <x-footer name="contact" />
</body>

</html>
