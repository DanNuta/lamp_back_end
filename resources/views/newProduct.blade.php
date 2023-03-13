<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
  <meta name="_token" content="{{ csrf_token() }}">

  @vite(['resources/js/newItem.js'])
</head>
<body>

  @extends("layouts/navbar")


  @csrf

<form method="POST" action="/addNewItem" id="form">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title item">
      <small id="error_title"></small>
    </div>

   <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Price item">
      <small id="error_price"></small>
    </div>

    <div class="custom-file">
        <input type="file" class="custom-file-input" id="img">
        <label class="custom-file-label" for="img">Choose file</label>
        <small id="error_img"></small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
   
  </form>

</body>
</html>