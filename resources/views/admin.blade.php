<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PEMPEK Q 96</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/addProduct.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <header>
      <a href="#" class="logo">Welcome, {{Session::get('name')}}</a>
      <ul class="list" id="list">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#review">Review</a></li>
      </ul>
    </header>
    <section class="parallax-home" id="home">
      <div id="monn">
        <img src="images/moon.png" alt="" class="moon1" width="200" />
        <img src="images/moon.png" alt="" class="moon2"/>
      </div>
      <img src="images/bush1.PNG" alt="" id="bush01" class ="bush_1" />
      <img src="images/bush2.PNG" alt="" id="bush02" class="bush_2"/>
      <img src="images/bush3.PNG" alt="" id="bush3" class="bush_3" />
      <img src="images/bush4.PNG" alt="" id="bush4" class="bush_4"/>
      <h1 id="text">PEMPEK Q 96</h1>
      <img src="images/fence.PNG" alt="" id="fencee" />
      <img src="images/orang.PNG" alt="" id="human" />
      <img src="images/sign.PNG" alt="" id="panah" class="panah1"/>
    </section>

    <section class="about" id="about">
      <div class="info-box">
          <h2>About Us</h2>
          <p>
            Pempek adalah salah satu makanan tradisional asal Palembang provinsi Sumatera Selatan. Makanan ini terbuat dari bahan dasar sagu dan ikan karena masyarakatnya mayoritas nelayan dan merupakan provinsi dari Palembang. 
          </p>
          <p id="more" class="noShow">
            Pempek Q96 adalah UMKM kuliner yang berdiri sejak 2007, berfokus pada makanan khas Indonesia seperti Batagor, Siomay, Pempek Telor, dan sebagainya. Awal mula berdirinya Pempek Q96, yang dimana merupakan orang Palembang sehingga pandai membuat Pempek dan mencoba untuk jualan, dengan visi dan misi harus bisa maju dari kecil hingga jualan bisa besar.
          </p>
          <a class="btn" id="moreBtn" onclick="showMore()">Read More!</a>
          <a class="btn" id="lessBtn" onclick="showLess()" style="display: none;">Show Less</a>
          
      </div>
      <img src="images/ibu_hijab.png" alt="" id="ibu" class="hijabers">
      <img src="images/Seblakk.png" alt="" id="" class="blak">
      <img src="images/Tahu walikk.png" alt="" id="" class="walik">
      <img src="images/Pempekk.png" alt="" id="" class="pempek_2">
      <img src="images/Batagorr.png" alt="" id="waterfall" class="buburs">
      
       <div id="progress">
          <span id="progress-value">
            <i class='bx bx-chevrons-up'></i>
          </span>
       </div>
    </section>

    <section class="products" id="products">
      <tr>
        <h2>Product</h2>
        <Button class="addBest" id="addBest">Add Product</Button>
        <div class="form-container">
          <div class="productForm" id="formBest">
            <h1>Add product</h1>
            <div class="inputForm">
              <form id="bestForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" placeholder="Upload image" name="image" id="imageB">
                <input autocomplete="off" type="text" placeholder="Product name" name="product_name" id="product_nameB">
                <input autocomplete="off" type="text" placeholder="Product price" name="price" id="priceB">
                <input autocomplete="off" type="text" placeholder="Description" name="product_description" id="product_descriptionB">
                <button id="submitBest" type="submit">Submit</button>
              </form>
              <button id="Cancel">Cancel</button>            
            </div>

            @if (session('success'))
              <script>alert('Selamat datang')</script> 
            @endif
          </div>
          <div class="cardContainer">
            @include('layouts.productCard')
          </div>
        </div>

      </tr>
     </section>

     <!-- Contact Section -->
     <section class="contact" id="contact">
        <h2>Contact</h2>
        <div class="contactContainer" style="margin-top: 5rem; justify-content: space-around;">
          <div class="contact-card">
            <i class="fa-solid fa-clock fa-2xl" style="color: #74C0FC;"></i>
            <div class="info">
                <div class="price-name">
                    <p>08:00 - 22:00 WIB</p>
                </div>
            </div>
          </div>
          <div class="contact-card">
            <i class="fa-solid fa-location-dot fa-2xl" style="color: #74C0FC;"></i>
            <div class="info">
                <p>UIB</p>
            </div>
          </div>
          <div class="contact-card">
            <i class="fa-solid fa-phone fa-2xl" style="color: #74C0FC;"></i>
            <div class="info">
                <p>0812 3456 7890</p>
            </div>
          </div>
        </div>
     </section>

     <section class="review" id="review">
      <h2>Review</h2>
      <div class="reviewBox">
        @include('layouts.Review')
      </div>
      </div>
     </section>

    <script src="js/main.js"></script>
    <script src="js/addProduct.js"></script>
  </body>
</html>
