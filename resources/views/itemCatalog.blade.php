
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite(['resources/js/itemCatalog.js', 'resources/css/itemCatalog.scss'])
</head>
<body>

  @extends("layouts/navbar")

  <form method="POST" action="/updateItem" enctype="multipart/form-data">
    @csrf

    <h1>Title</h1>

    <input type="hidden" id="hiddenId" name="custId" value="{{ $item->id }}">

    <div class="title_item">
        <h1 id="title">{{ $item->title }}</h1>
        <button class="btn btn-primary update_item_title_btn">Update</button>
    </div>


    <div class="update_title">
        <input class="input_title_active" type="text" placeholder="{{ $item->title }}">

        <div class="btns_update_title">
            <button type="button" class="btn btn-primary add_data_in_bd_btn_active">Add data in data base</button>
            <button type="button" class="btn btn-danger cancel_btn">Cancel</button>
        </div>
    </div>








    <h1>Price  </h1>

    <div class="price_item">
        <h1 id="price">{{ $item->price }}</h1>
        <button class="btn btn-primary update_item_price_btn">Update</button>
    </div>


    <div class="update_price">
        <input class="input_price_active" type="number" placeholder="{{ $item->price }}">

        <div class="btns_update_price">
            <button type="button" class="btn btn-primary add_data_in_bd_btn_active_price">Add data in data base</button>
            <button type="button" class="btn btn-danger cancel_btn_price">Cancel</button>
        </div>
    </div>


    <h4>Image</h4>
    <img src="{{ asset('images/'.$item->img) }}" alt="">
    

    <button>Update</button>
  </form>

  
  

</body>
</html>