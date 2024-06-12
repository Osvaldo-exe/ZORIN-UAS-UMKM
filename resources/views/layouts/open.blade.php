<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/open.css">
    <title>Document</title>

    <style>
        .openBody{
            display: block;
        }
    </style>
</head>
<body class="openBody">
    @foreach ($reviews as $item)
    <div>
        
    </div>
        <h4>{{$item->product_name}}</h4>
        <div class="ratingContainer" id="{{$item->product_name}}">
            <div>
                <input type="hidden" value="{{$item->product_name}}" id="openHiddenInput">
                <div class="stars">Rate : {{$item->rating}} ★</div>
                <div>Review : {{$item->review}}</div>
            </div>
            @if (request()->is('admin'))
            <div class="buttonContainer">
                <a class="deletos" href="/deleteR/{{ $item->id }}" class="btn3">Delete</a>
            </div>
            @endif     
        </div> 
    @endforeach
</body>
</html>