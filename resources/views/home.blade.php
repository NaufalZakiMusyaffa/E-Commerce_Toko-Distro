<style>
    @font-face {
    font-family:"Raleway-regular";
    src:url('fonts/Raleway-Regular.ttf')
}
@font-face {
    font-family:"Raleway-medium";
    src:url('fonts/Raleway-Medium.ttf')
}
@font-face {
    font-family:"Raleway-bold";
    src:url('fonts/Raleway-Bold.ttf')
}
@font-face {
    font-family:"Raleway-extrabold";
    src:url('fonts/Raleway-ExtraBold.ttf')
}
@font-face {
    font-family:"Raleway-semibold";
    src:url('fonts/Raleway-SemiBold.ttf')
}
@font-face {
    font-family:"Raleway-black";
    src:url('fonts/Raleway-Black.ttf')
}


/* colors  */

:root {
    --primary:#EEBF00;
    --secondary:#232B38;
    --ternary:#6C6C6C;
    --danger:#FE4545;
    --pure:#FEFEFE;
    --light:#F0F0F0;
    --heaven:#FFFFFF;
    --footer:#2D333F;
}

/* Reset  */
*{
    padding:0;
    margin:0;
    box-sizing: border-box;
}

body{
    -webkit-font-smoothing:antialiased;
    font-family: "Raleway-regular";
}
.container {
    width:100%;
    padding:o 15px;
    margin:0 auto;
}

@media (min-width:576px){
    .container{
        max-width:540px;
    }
}
@media (min-width: 768px) {
    .container {
      max-width: 720px;
    }
  }
  
  @media (min-width: 992px) {
    .container {
      max-width: 960px;
    }
  }
  
  @media (min-width: 1200px) {
    .container {
      max-width: 1152px;
    }
  }

  .main-wrapper{
      position:relative;
      width:100%;
      height:100vh;
      overflow:hidden;
  }

  .nav-background{
      width:100%;
      height:100%;
      background:var(--light);
      position: absolute;
      top:0;
      left:0;
      padding:0;
      z-index:1;
  }

  .nav-trigger{
      position: absolute;
      top:0;
      left:0;
      z-index:1;
      padding:15px;
      display:none;
  }

  .nav-trigger svg{
      transform:rotate(90deg) scaleX(-1);
      -webkit-transform:rotate(90deg) scaleX(-1);
      -moz-transform:rotate(90deg) scaleX(-1);
      -ms-transform:rotate(90deg) scaleX(-1);
      -o-transform:rotate(90deg) scaleX(-1);
      width:40px;
      height:40px;
}
.site-content-wrapper{
    width:100%;
    height:100%;
    position:absolute;
    background:var(--heaven);
    z-index:2;
    transition:all .3s ease;
    -webkit-transition:all .3s ease;
    -moz-transition:all .3s ease;
    -ms-transition:all .3s ease;
    -o-transition:all .3s ease;
}

.site-content-wrapper.scaled{
    transform:scale(0.9) translateX(90%);
    -webkit-transform:scale(0.9) translateX(90%);
    -moz-transform:scale(0.9) translateX(90%);
    -ms-transform:scale(0.9) translateX(90%);
    -o-transform:scale(0.9) translateX(90%);
    border-radius:3px;
    -webkit-border-radius:3px;
    -moz-border-radius:3px;
    -ms-border-radius:3px;
    -o-border-radius:3px;
    box-shadow:0 3px 10px 0 var(--secondary);
}

.site-content{
    width:100%;
    height:100%;
    overflow-x:auto;
}

  header.topbar{
      background:var(--secondary);
      color:var(--pure);
      font-family:"Raleway-semibold";
      padding:0.75rem 0;
  }
  header.topbar .auth > div a{
      color:var(--pure);
      text-decoration: none;
  }
  header.topbar .icons a{
    margin-right:0.6rem;
  }
  header.topbar .auth .divider{
      padding:0 1rem;
  }
  header.topbar .auth > div img{
      margin-right:0.35rem;
  }
  .flex{
    display:flex;
  }
  .justify-between{
    justify-content: space-between;
  }
  .items-center{
      align-items: center;
  }
  nav .top{
      padding:1.5rem 0;
  }
  nav .top .contact h5,  nav .top .time h5{
      font-family:"Raleway-black";
      margin-bottom:0.25rem;
  }
  nav .top .contact h6, nav .top .time h6{
    font-family:"Raleway-medium";
    letter-spacing: 0.055rem;
    font-size:0.75rem;
    color:var(--ternary);
}
nav .top .contact img, nav .top .time img{
    margin-right:1rem;
}

.justify-center{
    justify-content:center;
}
nav .navbar a{
    text-decoration:none;
    color:var(--secondary);
    font-family:"Raleway-semibold";
    font-size:1rem;
    padding:1rem 1.5rem;
    transition:all .3s ease;
    -webkit-transition:all .3s ease;
    -moz-transition:all .3s ease;
    -ms-transition:all .3s ease;
    -o-transition:all .3s ease;
}
nav .navbar a.active{
    background:var(--secondary);
    color:var(--pure);
}
nav .navbar a:hover{
    background:var(--secondary);
    color:var(--pure); 
}
.magic-shadow{
    position: relative;
    background:var(--heaven);
}
.magic-shadow:after{
    content:'';
    display:block;
    width:100%;
    height:69px;
    background-image:url('icons/shadow.svg');
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    bottom:-22px;
    z-index:-1;
    
}
.magic-shadow-sm{
    position: relative;
    background:var(--heaven);
}
.magic-shadow-sm:after{
    content:'';
    display:block;
    width:100%;
    height:69px;
    background-image:url('icons/shadow-sm.svg');
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    bottom:-20px;
    left:50%;
    transform:translateX(-50%);
    z-index:-1;
    -webkit-transform:translateX(-50%);
    -moz-transform:translateX(-50%);
    -ms-transform:translateX(-50%);
    -o-transform:translateX(-50%);
}
header.hero{
    height:600px;
    background-image:url('images/baner.jpg');
    background-position: 0% 0%;
    background-repeat: no-repeat;
    overflow:hidden;
}
header.hero .container{
    position: relative;
}
header.hero .welcome{
    margin-bottom:0.25rem;
}
header.hero .welcome span{
    font-family:"Raleway-bold";
    color:var(--secondary);
    margin-right:0.75rem;

}
header.hero h1{
    font-family:"Raleway-extrabold";
    color:var(--secondary);
    font-size: 2.5rem;
    margin-bottom:0.75rem;
}
header.hero h1 span{
    color:var(--primary);
}
header.hero p{
    font-family: "Raleway-medium";
    width:50%;
    line-height:1.5;
    margin-bottom:1rem;
}
.btn{
    padding:0.75rem 0.75rem;
    border-radius:4px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    -ms-border-radius:4px;
    -o-border-radius:4px;
    line-height:0.8;
    font-size:1.2rem;
    cursor: pointer;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    border:1px solid transparent;
}

.btn-primary {
    background:var(--primary);
    color:var(--heaven);
}
.btn-primary:hover{
    background:var(--heaven);
    color:var(--primary); 
    border:1px solid var(--primary);
}
.btn-secondary{
    background:var(--secondary);
    color:var(--heaven); 
}
.btn-secondary:hover{
    background:var(--heaven);
    color:var(--secondary); 
    border:1px solid var(--secondary);
}

header.hero button:first-child{
    margin-right:0.50rem;
}

header.hero .hero-image{
    position:absolute;
    top:-40px;
    right:40px;
}
.text-primary{
    color:var(--primary);
}

section{
    padding:4rem 0;
}

section.big-deal {
    background: linear-gradient(
        rgba(35,43,56,0.9),
        rgba(35,43,56,0.9)
    ), url('images/background.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
section.big-deal .timer{
    display:flex;
    align-items: center;
    justify-content: center;
    margin-right:-2rem;
    margin-bottom:2rem;
}
section.big-deal .timer div{
    margin-right:2rem;
    background: var(--primary);
    width:150px;
    height:150px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    display:flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
section.big-deal .timer div span:first-child{
    font-family: "Raleway-semibold";
    font-size:2.5rem;
    color:var(--heaven);
    margin-bottom:0.05rem;
}
section.big-deal .timer div span:last-child{
    font-family: "Raleway-medium";
    color:var(--heaven);
}
.text-pure{
    color:var(--pure);
}

header .content {
  position: relative;
  z-index: 1;
}
header .content h1 {
  color: #FFF;
  font-size: 28px;
  font-weight: 900;
}
header .content h1 span {
  font-weight: 400;
}
@media screen and (min-width: 480px) {
  header .content h1 {
    font-size: 36px;
  }
}
@media screen and (min-width: 768px) {
  header .content h1 {
    font-size: 42px;
  }
}
@media screen and (min-width: 1024px) {
  header .content h1 {
    font-size: 56px;
  }
}
@media screen and (min-width: 1280px) {
  header .content h1 {
    font-size: 45px;
  }
}
header .content h2 {
  color: #FFF;
  font-size: 42px;
  font-weight: 900;
  margin: 60px 0px;
}
@media screen and (min-width: 480px) {
  header .content h2 {
    font-size: 56px;
  }
}
@media screen and (min-width: 768px) {
  header .content h2 {
    font-size: 72px;
  }
}
@media screen and (min-width: 1024px) {
  header .content h2 {
    font-size: 96px;
  }
}
@media screen and (min-width: 1280px) {
  header .content h2 {
    font-size: 128px;
  }
}
header .content .countdown {
  color: #FFF;
  font-size: 20px;
  font-weight: 400;
  margin-left: 305px;
  
}
@media screen and (min-width: 480px) {
  header .content .countdown {
    font-size: 20px;
  }
}
@media screen and (min-width: 768px) {
  header .content .countdown {
    font-size: 20px;
  }
}
@media screen and (min-width: 1024px) {
  header .content .countdown {
    font-size: 20px;
  }
}
@media screen and (min-width: 1280px) {
  header .content .countdown {
    font-size: 70px;
    justify-content: center;
  }
}

section.our-services{
    background:var(--light);
    position:relative;
    z-index:0;
}
section.our-services .card-wrapper{
    margin-right:-2rem;
    margin-top:8rem;
}
section.our-services .service-card{
    background:var(--heaven);
    text-align: center;
    padding:2rem;
    padding-top:4rem;
    margin-right:2rem;
    position: relative;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
}
section.our-services .service-card .icon{
    position: absolute;
    top:-45px;
    left:50%;
    transform:translateX(-50%);
    -webkit-transform:translateX(-50%);
    -moz-transform:translateX(-50%);
    -ms-transform:translateX(-50%);
    -o-transform:translateX(-50%);
} 
section.our-services .service-card h2{
    font-family: "Raleway-bold";
    font-size: 1.3rem;
    margin-bottom:1rem;
}
section.our-services .service-card p{
    line-height: 1.6;
    margin-bottom:1rem;
}
.text-primary{
    color:var(--primary);
}

</style>

 <script type="text/javascript">
// Setup End Date for Countdown (getTime == Time in Milleseconds)
let launchDate = new Date("December 20, 2021 12:00:00").getTime();

// Setup Timer to tick every 1 second
let timer = setInterval(tick, 1000);

function tick () {
  // Get current time
  let now = new Date().getTime();
  // Get the difference in time to get time left until reaches 0
  let t = launchDate - now;

  // Check if time is above 0
  if (t > 0) {
    // Setup Days, hours, seconds and minutes
    // Algorithm to calculate days...
    let days = Math.floor(t / (1000 * 60 * 60 * 24));
    // prefix any number below 10 with a "0" E.g. 1 = 01
    if (days < 10) { days = "0" + days; }
    
    // Algorithm to calculate hours
    let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    if (hours < 10) { hours = "0" + hours; }

    // Algorithm to calculate minutes
    let mins = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    if (mins < 10) { mins = "0" + mins; }

    // Algorithm to calc seconds
    let secs = Math.floor((t % (1000 * 60)) / 1000);
    if (secs < 10) { secs = "0" + secs; }

    // Create Time String
    let time = `${days} : ${hours} : ${mins} : ${secs}`;

    // Set time on document
    document.querySelector('.countdown').innerText = time;
  }
}
</script>


@extends('layouts.app')

@section('content')
<div class="main-wrapper">
        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10" />
                    <line x1="18" y1="20" x2="18" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="16" /></svg>
            </div>
            <div class="site-content">
                <nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="./icons/phone.png" alt="">
                                <div>
                                    <h5>Call US: (+62) 895 432 210 12</h5>
                                    <h6>E-mail : contoh@FKZDistro.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                                <img src="./images/Distro.png" alt="">
                            </div>
                            <div class="time flex items-center">
                                <img src="./icons/clock.png" alt="">
                                <div>
                                    <h5>Jam Kerja:</h5>
                                    <h6>Senin - Minggu (8.00 - 23.00)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">
                            <a href="#home" class="active">Home</a>
                            <a href="#about">About us</a>
                            <a href="#product">Products</a>
                            <a href="#services">Services</a>
                            <a href="#galeri">Gallery</a>
                            <a href="#contactus">Contact us</a>
                        </div>
                    </div>
                </nav>

                <header class="hero flex items-center">
                    <div class="container">
                        <div class="welcome flex items-center">
                            <span>Welcome to FKZ Distro</span>
                        </div>
                        <h1>High <span>Quality</span> Distro</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy.</p>
                        <div>
                            <a href="#product" class="btn btn-secondary">Shop Now</a>
                        </div>
                    </div>
                </header>                

<div class="container" id="product">
<div class="col-md-2 mx-auto mb-4"> 
    <h2 class="text-center">Product</h2>
    <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 153px; height: 2px">
</div>
    <div class="row justify-content-center">

        @foreach($barangs as $barang)


        <div class="col-md-4 mt-5">
            <div class="card">
                <img src="{{ url('images') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text">
                        <br>
                        <strong>Stok :</strong> {{ $barang->stok }} <br>
                        <br>
                        <strong>Keterangan :</strong> <br>
                        {{ $barang->keterangan }}
                        <br>
                        <p style="color: orange">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </p>
                    </p>
                    <a class="btn btn-primary text-white">Rp. {{ number_format($barang->harga)}}</a>
                    <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-success">Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-block col-12 mt-4">
        {{ $barangs->links() }}
    </div>
</div>

<section class="big-deal" id="galeri">
<header>
    <div class="content">
                    <div class="container">
                        <h1 class="text-center text-white">Big Deals of the Week</h1>
                        <hr class="bg-primary-center" style="width: 85px; height: 2px">  
                        <div class="countdown">00 : 00 : 00 : 00</div>
                    </div>
                </div>
                </header>
                </section>
<br>
<br>
<br>
<section class="our-services" id="services">
                    <div class="container">
                        <h1 class="section-heading text-center">Our services</h1>
                        <div class="card-wrapper flex">
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="./icons/transport.svg" alt="">
                                <h2>Free Home delivery</h2>
                                <p>Salah satu layanan kami barang akan diantar secara gratis sampai ke rumah anda.</p>
                                
                            </div>
                            <div class="service-card magic-shadow-sm">
                                <img class="icon" src="./icons/usd.svg" alt="">
                                <h2>Money Back Guaranted</h2>
                                <p>Barang tidak sesuai ? Tenang saja jaminan dari kami Uang anda akan kembali utuh.</p>
                                
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <br>
                <br>
          
<footer class="page-footer bg-dark">
            <div class="bg-dark">
                <div class="container">
                    <div class="row py-4 d-flex align-item-center">
                        <div class="col-md-12 text-center">
                            <a href="https://www.facebook.com/nouval.zaki.9"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-line text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in text-white mr-4"></i></a>
                            <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
                        </div>
                    </div>
                </div>
            <div>

            <div class="container text-center text-md-left mt-5">
                <div class="row">
                    <div class="col-md-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold text-white">FKZ Distro</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
                        <p class="mt-2 text-white">FKZ Distro merupakan toko distro yang memiliki produk-produk yang high quality dan tentunya nyaman untuk dipakai.</p>
                    </div>

                        <div class="col-md-3 mx-auto mb-4">
                        <h6 class="textuppercase font-weight-bold text-white">Product</h6>      
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">  

                        <ul class="list-unstyled">
                            <li class="my-2"><a href="#product">T-Shirt</a></li>
                        </ul>
                        </div>

                        <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold text-white">Usefull Links</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">

                        <ul class="list-unstyled">
                            <li class="my-2"><a href="{{ url('home') }}">Home</a></li>
                            <li class="my-2"><a href="{{ url('profile') }}">Profile</a></li>
                        </ul>
                        </div>

                        <div class="col-md-3 mx-auto mb-4" id="contactus">
                        <h6 class="text-uppercase font-weight-bold text-white">Contact</h6>
                        <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">

                        <ul class="list-unstyled" id="about">
                            <li class="my-2 text-white"><i class="fas fa-home mr-3"></i>Jl Asia Afrika No. 00</li>
                            <li class="my-2 text-white"><i class="fas fa-envelope mr-3"></i>fkzdistro@gmail.com</li>
                            <li class="my-2 text-white"><i class="fas fa-phone mr-3"></i>08956232652</li>
                        </ul>
                        </div>
                </div>
            </div>

                        <div class="footer-copyright text-center py-3">
                            <p>Created by Naufal & Yusuf </p>
                         </div>
            
 </footer>
@endsection








