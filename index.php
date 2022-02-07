<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Paella Party</title>
      <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
      <?php include("includes/style.php"); ?>
   </head>
   <body>
      <?php include("includes/header.php"); ?>
      <h1 class="title">CODEGRID</h1>

<div id="preloader">
    <div class="p">LOADING</div>
</div>

<script>

paceOptions = {
ajax: true,
document: true,
eventLag: false
};

Pace.on('done', function() {
$('.p').delay(500).animate({top: '30%', opacity: '0'}, 3000, $.bez([0.19,1,0.22,1]));


$('#preloader').delay(1500).animate({top: '-100%'}, 2000, $.bez([0.19,1,0.22,1]));

TweenMax.from(".title", 2, {
     delay: 1.8,
          y: 10,
          opacity: 0,
          ease: Expo.easeInOut
    })
});

      

 
      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>