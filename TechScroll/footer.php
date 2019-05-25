</main>
<!-- /.Main Layout-->

<!-- FOOTER STARTS HERE -->
<footer class="page-footer font-small pt-5 mt-4">
    <!-- Footer Links -->
    <div class="main-footer container text-center text-md-left">
      <div class="row">
        <div class="col-md-6 col-sm-12 mt-md-0 mt-3 mb-4">
          <h5>Footer Content</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro delectus, animi soluta perferendis labore placeat, praesentium, quaerat quia laboriosam eaque vero, laudantium sequi ex rerum!</p>
        </div>
        <hr class="clearfix w-100 d-md-none pb3 mb-4">
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Links</h5>
          <ul class="list-unstyled">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Links</h5>
          <ul class="list-unstyled">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
<!-- /.Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3 wow fadeIn">
  <div class="row">
    <div class="col-sm-4">&copy; 2019. All rights reserved
    </div>
    <div class="col-sm-4">Made with <i class="material-icons text-red">favorite</i> by <a href="index.php">TTC</a>
    </div>
    <div class="col-sm-4"><a href="#to-top"><i class="material-icons">arrow_upward</i></a>
    </div>
</div>
</div>
<!-- /.Copyright -->

</footer>
 <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- scroll reveal -->
  <script type="text/javascript" src="js/scrollreveal.js"></script>
  <!-- <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script> -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
  <script type="text/javascript">
    // ScrollReveal settings
    window.sr = ScrollReveal({
      reset: false,
      mobile: true,
      useDelay: 'always'
    });

    
    sr.reveal('nav', {
    duration: 3000,
    origin: 'bottom',
    distance: '300px'
    });
    
    sr.reveal('.showcase-left', {
    duration: 2000,
    origin: 'left',
    rotate: { x: 0, y: 10, z: 50 },
    scale: 0.8,
    distance: '300px',
    delay: 1000
    });

    sr.reveal('.showcase-right', {
    duration: 2000,
    origin: 'right',
    distance: '300px',
    delay: 1000
    });

    sr.reveal('#showcase a.showcase-btn', {
    duration: 3000,
    origin: 'bottom',
    opacity: 0,
    delay: 3500
    });

    sr.reveal('#testimonial p', {
    duration: 3000,
    origin: 'left',
    distance: '300px',
    viewFactor: 0.8,
    delay: 1000
    });

    sr.reveal('.info-left', {
    duration: 2000,
    origin: 'left',
    distance: '300px',
    viewFactor: 0.5,
    });

    sr.reveal('.info-right', {
    duration: 2500,
    origin: 'right',
    distance: '300px',
    viewFactor: 0.5,
    delay: 500
    });

  </script>
  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

</body>

</html>
<!-- /.FOOTER ENDS-->