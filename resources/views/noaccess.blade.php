<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no access</title>
 </head>
  <body>
    <div id="app">
      <h1>You cannot excess this page</h1>
      
      <button href="/"> Back to home</button>
   </div>
    

</body>
</html>

<style lang="css">
   body{
      background-color: #000000;
      color: yellow;
      display : flex;
      flex-direction : column;
      justify-content : center;
      align-items : center;
   }
   
   #app{
      display : flex;
      flex-direction : column;
      justify-content : center;
      align-items : center;
      
      
   }
</style>