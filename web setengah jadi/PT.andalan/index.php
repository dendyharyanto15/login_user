<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body id="about">
    <sectio>
        <!-- ini navbar -->
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PT. andalan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projects">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contect</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Profile 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">Logout</a></li>
            <li><a class="dropdown-item" href="register.php">Register</a></li>
            <li><a class="dropdown-item" href="logout">edit profile</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- ini navbar end -->


<!-- jumbotron -->
<section class="jumbotron text-center">
  <img src="image/logo.jpg" alt="logo.jpg" width="200" class="rounded-circle img-thumbnail"/>
  <h1 class="display-4"></h1>
  <p class="lead">PT. Andalan | Inovasi Tanpa Batas</p>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1"
   d="M0,160L48,144C96,128,192,96,288,96C384,96,480,128,576,165.3C672,203,768,245,864,250.7C960,256,1056,224,1152,202.7C1248,181,1344,171,1392,165.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<!-- end jombptron -->

<!-- about -->
 <section id="about">
<div class="container">
  <div class="row text-center mb-3">
    <div class="col">
      <h2> About</h2>
    </div>
  </div>
  <div class="row justify-content-center fs-5 text-center">
    <div class="col-md-4">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore mollitia praesentium eius beatae 
        consectetur qui debitis magni animi excepturi distinctio.</p>
    </div>
    <div class="col-md-4">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus amet quaerat recusandae mollitia, a 
        eligendi nemo. Totam molestias quam maxime voluptates nobis, molestiae vel. Labore?</p>
    </div>
  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" 
d="M0,96L40,96C80,96,160,96,240,90.7C320,85,400,75,480,101.3C560,128,640,192,720,192C800,192,880,128,960,133.3C1040,139,1120,213,1200,218.7C1280,224,1360,160,1400,128L1440,96L1440,320L1400,320C1360,
320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

</section>
<!-- end about -->

<!-- ini project saya -->
 <section id= "projects">
  <div class="row text-center">
    <div class="col">
      <h2>projects</h2>
    </div>
  </div>
  <div class="container mt-3">
  <div class="wrapper">
<div class="row">
 
 <div class="card col-md mb-3">
  <div class="card-header">
    Artificial Intelligence
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <img src="image/AI.jpg" class="img-thumbnail" alt="...">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-md mb-3">
  <div class="card-header">
    Internet Of Things 
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <img src="image/IOT.jpg" class="img-thumbnail" alt="...">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><br/>
    <a href="#" class="btn btn-primary">Go somewhere</a><br/>
  </div>
</div>

<div class="card col-md mb-3">
  <div class="card-header">
    Robotic
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <img src="image/robot.jpg" class="img-thumbnail" alt="...">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-md mb-3">
  <div class="card-header">
    Data Analyst  
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <img src="image/Data Analyst.jpg" class="img-thumbnail" alt="...">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

 </div>
 </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,128L40,149.3C80,171,160,213,240,229.3C320,245,400,235,480,229.3C560,224,640,224,720,208C800,192,880,160,960,
138.7C1040,117,1120,107,1200,133.3C1280,160,1360,224,1400,256L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

 </section>
 <!-- ini end project -->

 <!-- contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Contact</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
      <form>
  <div class="mb-3">
    <label for="name" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="naem" aria-describedby="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="email">
  </div>
  <div class="mb-3">
  <label for="pesan" class="form-label">Pesan</label>
  <textarea class="form-control" id="pesan" rows="3"></textarea>
</div>
 
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,192L40,197.3C80,203,160,213,240,234.7C320,256,400,288,480,282.7C560,277,640,235,720,229.3C800,224,880,256,960,261.3C1040,267,1120,245,1200,250.7C1280,256,1360,288,1400,304L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,
    960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  </section>
  <!-- end Contact -->
   <!-- footer -->
<footer>
    <?php include "layout/footer.html" ?>
</footer>

    <!-- end footer -->
    </div>
 
<!-- boststrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>