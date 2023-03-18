
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
  @vite(['resources/js/itemCatalog.js', 'resources/css/itemCatalog.scss'])
</head>
<body>

  @extends("layouts/navbar")


  <form enctype="multipart/form-data">
    @csrf
    <h1>Title</h1>

    <div class="title_item">
        <h1 id="title">{{ $item->title }}</h1>
        <button class="update_item_title">Update</button>
    </div>
        <input class="input_title" type="text" placeholder="{{ $item->title }}">



    <h1>Price</h1>
    <p>{{ $item->price }}</p>

    <h4>Image</h4>
    <img src="{{ asset('images/'.$item->img) }}" alt="">
    

    <button>Update</button>
  </form>

  
  

</body>
</html>