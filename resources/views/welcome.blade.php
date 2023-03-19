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

   

   <h1>List of all catalogs</h1>


    <div style="display: flex; gap: 20px; flex-wrap: wrap" class="items">
        @foreach ($data as $item)

        <div class="card" style="width: 18rem;">
            <a href="/itemCatalog/{{ $item->id }}">
            <img class="card-img-top" src="{{ asset('images/'.$item->img)}}" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">{{ $item->title }}</h5>
              <span style="display: flex; gap: 5px"><h6>category:</h6><a  href="category/{{ $item->id_category }}">{{ $item->category }}</a></span>
              <p class="card-text">$ {{ $item->price }}</p>
              <button data-id="{{ $item->id }}" type="button" class="btn btn-danger">Delete item</button>
            </div>
        </div>
            @endforeach
    </div>

  


</body>
</html>

  
