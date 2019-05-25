<?php include('header.php'); ?>
<!-- Hero-->
<section id="showcase">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="showcase-left">
          <img src="img/pics/pic-1.png" alt="Pic 1" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="showcase-right">
          <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit porro, animi id libero modi perspiciatis!</p>
        </div>
        <br>
        <a href="#" class="btn btn-lg showcase showcase-btn">Read More</a>  
      </div>
    </div>
  </div>
</section>
<!-- /.Hero-->
<!-- Testimonials -->
<section id="testimonial">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi.</p>
  <p class="person">- John Doe</p>
</section>
<!-- /.Testimonials -->
<div id="wrapper">
<div class="sticky">
<nav class="navbar navbar-expand-lg navbar-default white text-black secondary-nav">
  <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryNav" aria-expanded="false" aria-label="Toggle Navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="secondaryNav">
  <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#showcase">Showcase
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#testimonial">Testimonial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#info-box-1">Info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#info-box-2">Specs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  <!-- /.Links -->
    <form action="post" class="form-inline text-black">
      <i class="material-icons large">search</i><div class="md-form my-0">
        <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search" />
      </div>
    </form>
  </div>
<!-- /.Collapsible content -->
</nav>
</div>
</div>
<!-- Info Boxes-->
  <section id="info-box-1">
    <div class="row">
      <div class="info-left col-md-6">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit porro, animi id libero modi perspiciatis!</p>
        <br>
        <a href="#" class="btn btn-lg showcase-btn">Read More</a>     
      </div>
      <div class="info-right col-md-6">
        <img src="img/pics/pic-2.png" alt="" class="img-fluid">
      </div>
  </div>
  </section>
<hr>
  <section id="info-box-2">
  <div class="row">
    <div class="info-left col-md-6">
      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit porro, animi id libero modi perspiciatis!</p>
      <br>
      <a href="#" class="btn btn-lg showcase-btn">Read More</a>     
    </div>
    <div class="info-right col-md-6">
      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit porro, animi id libero modi perspiciatis!</p>
    </div>
</div>
</section>
<!-- /.Info Boxes-->

<!-- Contact -->
  <section id="contact" class="clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-5 contact-left">
          <h2>Contact Us</h2>
          <form>
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>            
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="mailingListCheck">
              <label class="form-check-label" for="mailingListCheck">Add me to your mailing List</label>
            </div>
            <br>
            <button type="submit" class="btn showcase-btn">Submit</button>
          </form>
        </div>
        <div class="col-md-7 contact-right">
          <img src="img/pics/pic-3.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
<!-- /.Contact -->
<?php include('footer.php'); ?>