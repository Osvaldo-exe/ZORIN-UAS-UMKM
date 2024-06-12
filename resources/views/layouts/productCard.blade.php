<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        @foreach($products as $item)
            <div class="card">
                <img alt="" src="images/{{$item->image}}" />
                <div class="info">
                    <div class="price-name">
                        <h3>{{ $item->product_name }}</h3>
                        <span>Rp. {{ number_format($item->price, 0, ',', '.') }}</span>
                    </div>
                    <p>{{ $item->product_description }}</p>
                    @if (request()->is('/'))
                        <a href="#review" class="btn">Rate Us</a>
                    @elseif (request()->is('admin'))
                        <a href="/delete/{{ $item->id }}" class="btn2">Delete</a>
                    @endif
                </div>
            </div>
        @endforeach
    
</body>
</html>

@section('content')
    
@endsection



