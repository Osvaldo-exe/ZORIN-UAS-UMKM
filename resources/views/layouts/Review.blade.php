<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Review.css">
    <title>Document</title>
</head>
<body class="reviewBody"> 
    @if (request()->is('/')) 
    <div class="star-rating">
        <form action="{{Route('Review.User')}}" method="POST">
            @csrf
            <select id="product" name="product_name">
                @foreach($products as $product)
                    <option value="{{ $product->product_name }}">{{ $product->product_name }}</option>
                @endforeach
            </select>
            <div style="display: grid">
                <div class="starContainer">
                <span class="rating-label">Rating:</span>
                <div class="stars">
                    <input type="radio" id="star1" value="5" name="rating">
                    <label for="star1">★</label>
                    <input type="radio" id="star2" value="4" name="rating">
                    <label for="star2">★</label>
                    <input type="radio" id="star3" value="3" name="rating">
                    <label for="star3">★</label>
                    <input type="radio" id="star4" value="2" name="rating">
                    <label for="star4">★</label>
                    <input type="radio" id="star5" value="1" name="rating">
                    <label for="star5">★</label>
                </div>
            </div>
            <textarea placeholder="Write your comment here..." class="comment-box" id="comment-box" name="review"></textarea>
            <button type="submit" class="submit-comment">Submit</button>
            </div>
        </form>
    </div>
    @endif


    <div style="display: grid">
        @include('layouts.open')
    </div>
</body>
</html>