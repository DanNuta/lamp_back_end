<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @vite(['resources/css/home.scss'])
    <title>Document</title>
</head>
<body>
    @extends("layouts/navbar")


    <div class="title_item">
        <h1>Title</h1>
        <h1>Price</h1>
        <h1>Images</h1>
    </div>


    <div class="items">
        @foreach ($data as $item)
       
            <a href="/itemCatalog/{{ $item->id }}">
                <div class="item">
                    <h1>{{ $item->title }}</h1>
                    <p>{{ $item->price }}$</p>
                    <img src="{{ asset('images/'.$item->img) }}" alt="">
                 </div>
            </a>

    
        @endforeach
    </div>

  


</body>
</html>

  
