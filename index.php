<?php
session_start();
include "nav.php";
require("checklogin.php");

check_login()
?>


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://taungdailynews.files.wordpress.com/2015/06/dsc_5185.jpg"  class="d-block w-100 h-20" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://businesstech.co.za/news/wp-content/uploads/2021/02/Greyhound.jpg" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://businesstech.co.za/news/wp-content/uploads/2021/02/Greyhound.jpg" class="d-block w-100 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





<div class="d-flex justify-content-center line ">
    <br><br> 
    <h2 class="top_title">Know your buses</h2>
</div>
<div class="row1-container">



    <div class="box box-down cyan">
      <h2 align="center">Locsl Buses</h2>
      <p>Monitors activity to identify project roadblocks</p>
      <img src="./assests/images/clip-school-bus.png" style="width:40%" alt="">
    </div>

    <div class="box red">
      <h2 align="center">External Campus Buses</h2>
      <p>Scans our talent network to create the optimal team for your project</p>
      <img src="./assests/images/clip-school-time-1.png" style="width:40%" alt="">
    </div>

    <div class="box box-down blue">
      <h2 align="center">Residents Buses</h2>
      <p>Uses data from past projects to provide better delivery estimates</p>
      <img src="./assests/images/arabica-1167.png" style="width:40%" alt="">
    </div>
  </div>
  <div class="row2-container">
    <div class="box orange">
      <h2 align="center">PWD Buses</h2>
      <p>Regularly evaluates our talent to ensure quality</p>
      <img src="./assests/images/stripy-68.png"style="width:40%" alt="">
    </div>
  </div>


<div class="d-flex justify-content-center line">

<h2 class="top_title">Bus Rules</h2>
<hr>
</div>

<div class="rules">

<br>
  <div class="container">
 
        <div class="card1">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        
                    <img src="./assests/images/gummy-mask.png"style="width:40%" alt="">
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="https://www.linkedin.com/in/adamdipinto/" target="_blank">Wear Your Mask</a>
                    </h3>
                    <p>This is where I network and build my professional protfolio.</p>
                </div>
            </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content">
                
                    <div class="icon">
                    
                    <img src="./assests/images/gummy-sanitizer.png"style="width:40%" alt="">
                    
                
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="https://twitter.com/AdamDipinto" target="_blank">Sanitize Your hands</a>
                    </h3>
                    <p>This is where I read news and network with different social groups.</p>
                </div>
            </div>
        </div>
        <div class="card1">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                   
                    <img src="./assests/images/3d-flame-254.png"style="width:40%" alt="">
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="https://github.com/atom888" target="_blank">Present Your Ticket </a>
                    </h3>
                    <p>This is where I share code and work on projects.</p>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="booking">


  </div>
</body>
</html>