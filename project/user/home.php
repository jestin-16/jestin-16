
<?php 
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: http://localhost/project/home/login.php");
  
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/457a315592.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header class="header">
      <h3 class="heading-magicPaints">MAGIC PAINTS</h3>
      <nav class="list-info">
        <a href="#Services" class="nav-link">Services</a>
        <a href="#About" class="nav-link">About</a>
        <a href="#Contact" class="nav-link">Contact</a>
        <button class="login-button" id="button-log">
  <a href="http://localhost/project/home/login.php">Logout</a>
        </button> 
      </nav>
    </header>
    <main>
      <section class="intro">
        <h1 class="main-heading">We Paint Your Dream!</h1>
        <p class="intro-text">We do all painting and design works</p>
        <button class="login-button">
          <a href="book.php">Book now</a>
        </button>
        <p id="show-message"></p>
        <img src="imgs/Info.webp" class="intro-image" alt="Responsive image" />
      </section>
      <section class="services">
        <a name="Services"></a>
        <p class="section-text">We provide services like:</p>
        <div class="slider">
          <div
            class="slide active"
            style="background-image: url('imgs/paint-1.jpg')"
          >
            <div class="slide-text">Painting</div>
          </div>
          <div class="slide" style="background-image: url('imgs/paint-2.jpg')">
            <div class="slide-text">Designing</div>
          </div>
          <div class="slide" style="background-image: url('imgs/paint-3.jpg')">
            <div class="slide-text">Polishing</div>
          </div>
          <div class="slide" style="background-image: url('imgs/paint-4.jpg')">
            <div class="slide-text">Texture</div>
          </div>
          <button class="prev" onclick="prevSlide()">&#10094;</button>
          <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>
      </section>
      <section class="about">
        <a name="About" class="section-heading">About</a>
        <p class="section-text">
          Magic Painting, based in Kerala, is renowned for its high-quality
          painting services for residential and commercial clients. Specializing
          in both interior and exterior painting, they employ skilled
          professionals adept in traditional and modern techniques, including
          eco-friendly solutions. Their personalized approach ensures each
          project meets the client's unique needs, from initial consultation to
          final execution. Using premium materials and adhering to safety and
          environmental standards, Magic Painting guarantees durability and
          aesthetic appeal. Their blend of craftsmanship and innovation, along
          with a strong focus on customer satisfaction, makes them a top choice
          for painting services in Kerala.
        </p>
      </section>
      <section class="contact">
        <a name="Contact"></a>
        <div class="contact-info">
          <p id="showNumber">ph:</p>
          <p>mob:03487343898</p>
          <p>For more info:</p>
          <a
            class="link instagram"
            href="https://www.instagram.com/_magic_painting_/"
          >
            <i class="fab fa-2x fa-instagram"></i>
          </a>
          <a class="link facebook">
            <i class="fab fa-2x fa-facebook-f"></i>
          </a>
          <a class="link youtube">
            <i class="fab fa-2x fa-youtube"></i>
          </a>
        </div>
      </section>
    </main>
    <script>
     
      let phone = Number(9847194440);
      document.getElementById("showNumber").innerHTML += phone;

      let currentSlide = 0;
      const slides = document.querySelectorAll(".slide");
      const totalSlides = slides.length;

      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.remove("active");
          if (i === index) {
            slide.classList.add("active");
          }
        });
      }

      function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
      }

      function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
      }
    </script>
      <!-- <a href="http://localhost/project/home/login.php">Logout</a> -->
  </body>
</html>