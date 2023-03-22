<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @vite(['resources/css/home.scss', 'resources/js/home.js'])
    <title>Document</title>
</head>
<body>
    @extends("layouts/navbar")

   

   <h1>Login</h1>


   <form 
    method="POST" 
      
    action="{{route('postlogin')}}"
    >
    @csrf
     <div class="form-group">
      <label for="name">Nume</label>
      <input name="name" type="text" class="form-control" id="nume" aria-describedby="emailHelp" placeholder="Add new category">
      <small id="error_title"></small>
    </div>


     <div class="form-group">
      <label for="password">Password</label>
      <input name="password" type="text" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Add new category">
      <small id="error_title"></small>
    </div>


     <div class="form-group">
      <input name="submit" type="submit" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Add new category">
     
    </div>

    </form>

  


</body>
</html>