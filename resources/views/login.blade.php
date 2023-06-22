<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
 </head>
  <body>
    <x-header />
    <div id="app">
        <form action="login-controller" method="POST">
            @csrf
            <h1>Log In </h1>
             <div class='field-container' >
                <input type="text", name="username" placeholder="Username" />
                <span class="error" >@error('username')
                    {{ $message }}
                @enderror</span>
             </div>
             
            
            <div class="field-container">
                <input name="password" type="password" placeholder="Password" rows="5" />
                <span class="error" >@error('password')
                        {{ $message }}
                    @enderror</span>
            </div>
            <div class='button-container' >
                <button type="submit"> Submit post</button>
            </div>
            

            {{-- @if ($errors->any())
                <div>
                <h2 class="error">Error: </h2>
                <ul class='error' >
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
               
            @endif --}}
            
        </form>
    </div>
    <x-footer name="login" />
    

</body>
</html>