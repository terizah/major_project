<?php
$title = "Gallery";
include("header.inc");
?>
<?php
include("nav.inc");
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

</head>
<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>


    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="jap.jpg" alt="Japan" width="1920" height="1280"> 
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="airplane.jpg" alt="Airplane" width="1920" height="1280">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="beach.jpg" alt="Beach" width="1920" height="1280">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="mountain.jpg" alt="Mountain" width="1920" height="1280">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>

<br></br>
<div class=row>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <p>The Gallery hosts a wide range of international and local artists, exhibitions, programs and events; from contemporary art to major international historic exhibitions, fashion and design, architecture, sound and dance.
        </p>
    </div> 
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <p>A vast treasury of more than 70,000 works that span thousands of years and a wealth of ideas, disciplines and styles. It is a collection that is yours, and it’s free! We warmly welcome you to share in these riches and the many activities, exhibitions and events developed at the Gallery for us all to enjoy.</p>
    </div>
	
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
  <p>Researchers can access an extensive holding of books, journals and special collections in the Research Library, and learn about the ownership history of objects in the Collection through provenance research.
        </p>
    </div>
   
 
<?php
include("footer.inc");
?>
