<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite(['resources/js/addCategory.js'])
</head>
<body>

  @extends("layouts/navbar")


  <form 
    method="POST" 
    id="form"  
    enctype="multipart/form-data" 
    action="/addCategoryInDataBase"
    autocomplete="off"
    >
    
      @csrf
      

    <div class="form-group">
      <label for="category">Category</label>
      <input name="category" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Add new category">
      <small id="error_title"></small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
   
  </form>


  <div>
    <h1>All category</h1>


    <div class="category">

      @foreach ($category as $item)
          <div class="list_category">
            <h3>{{ $item->category }}</h3>
            <button data-id="{{ $item->id }}" type="button" class=" delete_category_btn btn btn-danger">Delete</button>
          </div>
      @endforeach


    </div>
  </div>


  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</body>
</html>