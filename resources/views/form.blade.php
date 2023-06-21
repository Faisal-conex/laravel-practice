<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <Form></Form>
    </title>
</head>

<body>
    <div id="app">
        <x-header />
        <form action="form-controller" method="POST">
            @csrf
            <h1>Post Information </h1>
             <div class='field-container' >
                <input type="text", name="post-title" placeholder="enter title of the post" />
                <span class="error" >@error('post-title')
                    {{ $message }}
                @enderror</span>
             </div>
             
            
            <div class="field-container">
                <textarea name="post-description" placeholder="enter title of the post" rows="5"> </textarea>
                <span class="error" >@error('post-description')
                        {{ $message }}
                    @enderror</span>
            </div>
            <button type="submit"> Submit post</button>

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
    <x-footer name="post" />

</body>

</html>


<style>
    form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        background-color: rgb(163, 162, 96);
        padding : 1rem;
    }
    
    .field-container{
        display:flex;
        flex-direction : column;
    }
    .error{
        color: red;
        gap : 0;
    }
</style>
