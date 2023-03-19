<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>


  @vite(['resources/js/newItem.js'])
</head>
<body>

  @extends("layouts/navbar")



  <form 
  method="POST" 
  id="form"  
  enctype="multipart/form-data" 
  action="/addNewItem">
    
      @csrf
      <div>
        <label for="category">Category</label>
        <select name="category" id="category" class="form-select" aria-label="Default select example">

         @foreach ( $category as $item)
         <option value="{{ $item->id }}" selected>{{ $item->category }}</option>   
         @endforeach
        </select>
      </div>



    <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title item">
      <small id="error_title"></small>
    </div>

   <div class="form-group">
      <label for="price">Price</label>
      <input name="price" type="number" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Price item">
      <small id="error_price"></small>
    </div>

    <div class="custom-file">
        <input name="image" type="file" class="custom-file-input" id="img">
        <label class="custom-file-label" for="img">Choose file</label>
        <small id="error_img"></small>
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
   
  </form>

</body>
</html>