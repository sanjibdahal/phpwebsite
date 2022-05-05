<?php
  session_start();
  if (!isset($_SESSION['logininfo']) || $_SESSION['logininfo']!=true) {
    header("location: ../login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" ></script>
  <script src="jquery.min.js"></script>
  <script src="owl.carousel.min.js"></script>
  <link rel="stylesheet" href="owl.carousel.min.css">
</head>

<body>
  <!-- Header Section -->
  <header>
    <a href="#home" class="logo">Portfo<span>lio.</span></a>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#work">Work</a></li>
      <li><a href="#testimonial">Testimonial</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>
  </header>
  
  <!-- Home Section -->
  <section class="home" id="home">
    <div class="content">
      <h3>Hello, <?php echo $_SESSION['username']; ?>
      <br> I'm </h3>
      <h1>Sanjib Dahal.</h1>
      <h2>And Also a <span class="text">Web Designer</span></h2>
      <a href="#about" class="btn">ABOUT ME</a>
    </div>
  </section>
  
  
  <!-- About Section -->
  <section class="about" id="about">
    <div class="heading">
      <h1>About <span>Me</span></h1>
    </div>
    <div class="row">
      <div class="box col">
        <h1>I'm a Web Developer.</h1>
        <p>(lorem60)Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, vero deleniti magni quis quos incidunt facere neque atque perspiciatis inventore, iure nulla, doloremque doloribus amet, pariatur consectetur vitae ipsam aliquam commodi fugiat explicabo. Veritatis autem, voluptas, temporibus soluta.
        <br><br>
        (lorem40)Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt quis consetur, itaque aspatur volupum totam nihil dolorem amet.</p>
      </div>
      <div class="col">
        <div class="imgBox">
          <img src="images/img1.jpg">
        </div>
      </div>
    </div>
  </section>
  
  <!-- Services Section -->
  <section class="services" id="services">
    <div class="heading">
      <h1>Our <span>Services</span></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="container">
      <div class="card">
        <div class="box">
          <img src="images/icon1.png">
          <h1>Web Design</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates nam, dicta voluptas cupiditate, aliquam est hic pariatur repellat. Vero, aliquas.</p>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <img src="images/icon2.png">
          <h1>Web Development</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates nam, dicta voluptas cupiditate, aliquam est hic pariatur repellat. Vero, aliquas.</p>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <img src="images/icon3.png">
          <h1>Android App</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates nam, dicta voluptas cupiditate, aliquam est hic pariatur repellat. Vero, aliquas.</p>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <img src="images/icon4.png">
          <h1>Photography</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates nam, dicta voluptas cupiditate, aliquam est hic pariatur repellat. Vero, aliquas.</p>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <img src="images/icon5.png">
          <h1>Content Writing</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates nam, dicta voluptas cupiditate, aliquam est hic pariatur repellat. Vero, aliquas.</p>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <img src="images/icon6.png">
          <h1>Video Editing</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates nam, dicta voluptas cupiditate, aliquam est hic pariatur repellat. Vero, aliquas.</p>
        </div>
      </div>
    </div>
  </section>


<!-- Work Section -->
  <section class="work" id="work">
    <div class="heading">
      <h1>Our Latest <span>Work</span></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="container owl-carousel carousel">
      <div class="card">
        <img src="images/product1.jpg">
        <h1 class="pro">Project 1</h1>
      </div>
      <div class="card">
        <img src="images/product2.jpg">
        <h1 class="pro">Project 2</h1>
      </div>
      <div class="card">
        <img src="images/product3.jpg">
        <h1 class="pro">Project 3</h1>
      </div>
      <div class="card">
        <img src="images/product4.jpg"> 
        <h1 class="pro">Project 4</h1>
      </div>
    </div>
    <div class="button">
      <a href="#work" class="btn">view more</a>
    </div>
  </section>


<!-- Testimonial Section -->
  
  <section class="testimonial" id="testimonial">
    <div class="heading">
      <h1>Testimon<span>ials</span></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="row">
      <div class="col">
        <p><i>Lorem ipsum dolor sit amet, consetur adipisicing elit. Vitae minima tenetur totam at, nisi, quam autem, esse sit enim, blanditiis velit a non asper necetibus quas animi repellat laudantium ex beatae quisquam explicabo eveniet incidunt ullam! Ducimus sequi sapiente harum, consr quia eligendi adipisci quod dolor maiores. Libero, ipsum officiis.</i></p>
        <div class="footer">
          <h1>Someone Famous</h1>
          <h3>Creative Designer</h3>
        </div>
      </div>
      <div class="col">
        <p><i>Lorem ipsum dolor sit amet, consetur adipisicing elit. Vitae minima tenetur totam at, nisi, quam autem, esse sit enim, blanditiis velit a non natur necessitbus quas animi repellat laudantium ex beatae quisquam explicabo eveniet incidunt ullam! Ducimus sequi sapiente harum, consr quia eligendi adipisci quod dolor maiores. Libero, ipsum officiis.</i></p>
        <div class="footer">
          <h1>Someone Famous</h1>
          <h3>Creative Designer</h3>
        </div>
      </div>
    </div>
  </section>
  
  
  
  <!-- Contact Section -->
  <section class="contact" id="contact">
    
  </section>

  <script>
    window.addEventListener('scroll',()=>{
      const header = document.querySelector('header');
      header.classList.toggle('sticky',scrollY>0);
    });
    
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        margin: 20,
        loop: false,
        responsive: {
          0:{
            items: 1,
            nav: false
          },
          600:{
            items: 2,
            nav: false
          },
          1000:{
            items: 3,
            nav: false
          },
        }
      });
      
    });
  </script>
</body>
</html>
