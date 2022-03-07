<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{url('favicon.ico')}}">
    <title>Found-Food</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('css/app.css')}}" rel="stylesheet">
    <link href="{{ url('css/carousel.css')}}" rel="stylesheet">
    <link href="{{ url('css/app.css.map')}}" rel="stylesheet">
    <link href="{{ url('js/app.js')}}" rel="stylesheet">
    <link href="{{ url('js/app.js.map')}}" rel="stylesheet">
    <link href="{{ url('js/holder.js')}}" rel="stylesheet">
    <link href="{{ url('js/ie8-responsive-file-warning.js')}}" rel="stylesheet">

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
         <!--     <a class="navbar-brand" href="{{url('views/app.blade.php')}}">FOUND-FOOD</a> -->
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="mainCarousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <script
			src="{{('http://maps.googleapis.com/maps/api/js?key=[AIzaSyBGMnHSfP4vjY8m2bBZ3NB9hSKfhIajLyo]')}}">
			</script>
			<script>
			var myCenter=new google.maps.LatLng(51.508742,-0.120850);
			var marker;
			function initialize()
			{
			var mapProp = {
			  center:myCenter,
			  zoom:15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			marker=new google.maps.Marker({
			  position:myCenter,
			 // icon:'themes/assets/images/nepali-momo.png',
			  animation:google.maps.Animation.BOUNCE
			  });

			marker.setMap(map);

			// Info open
			var infowindow = new google.maps.InfoWindow({
			  content:"Hello World!"
			  });

			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<div id="googleMap" style="height:450px;"></div>
			  <div class="container">
				<div class="carousel-caption">
				  <a class="btn btn-lg btn-default" href="#" role="button" style="font-size:2em">comment y aller &raquo;</a>
				</div>
			  </div>
			</div>
		  </div>
		</div><!-- /.carousel -->
	</div>

	<div class="mainTitle">
	<div class="container">
	<h1>FOUND-FOOD</h1>
	<p>
	Found-Food est une site qui permet de localiser les Restaurants disponibles a THIES ainsi que leurs services.
	</p>
  <!-- input tag -->

                
  <p><input id="searchbar"  type="text" name="search" placeholder="Rechercher Plats.."></p>
	</div>
	</div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/les delices.jpg" alt="Generic placeholder image">
          <h1>Les Délices</h1>
          <p>373 Av.Lamine Gueye,Thies</p>
          <p>
            <div class="btn-group"> 
              <button type="button" class="btn btn-default dropdown-toggle"
            data-toggle="dropdown">Menu <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="#">Café Gourmand</a></li> 
                <li><a href="#">Yassa Poissons</a></li> 
                <li><a href="#">Spaghetti Mélanger</a></li> 
                <li><a href="#">Gateaux</a></li> 
                <li><a href="#">Thiébou dieune</a></li> 
                <li><a href="#">Mafé</a></li> 
              </ul> 
            </div> 
          <a class="btn btn-default" href="#" role="button">Itinéraire</a>
          </p>
      
          <img class="img-circle" src="images/tata.png" alt="Generic placeholder image">
          <h1>Chez Tata Rosa</h1>
          <p>Diakhao,Thies</p>
          <p>
            <div class="btn-group"> 
              <button type="button" class="btn btn-default dropdown-toggle"
            data-toggle="dropdown">Menu <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="#">Café Expresso</a></li> 
                <li><a href="#">Capsule de café</a></li> 
                <li><a href="#">Grillade de Viande de porc Grillé</a></li> 
                <li><a href="#">Poisson Braisé</a></li> 
                <li><a href="#">Dibiterie:Mouton et poulet</a></li> 
                <li><a href="#">Crudité</a></li>  
              </ul> 
            </div> 
          <a class="btn btn-default" href="#" role="button">Itinéraire</a>
          </p>
		  <img class="img-circle" src="images/sams.jpg" alt="Lam Tikka">
          <h1>Sam's Prestige</h1>
          <p>Av Leopold Senghor,Thies</p>
          <p>
            <div class="btn-group"> 
              <button type="button" class="btn btn-default dropdown-toggle"
            data-toggle="dropdown">Menu <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="#">Salade de Crudités</a></li> 
                <li><a href="#">Fruit de Mer</a></li> 
                <li><a href="#">Plateau Fruits</a></li> 
                <li><a href="#">Crêpes Nutella</a></li> 
                <li><a href="#">Thiou Lakk</a></li> 
                <li><a href="#">Attiéké</a></li> 
                <li><a href="#">Gratins au pomme de terre</a></li> 
                <li><a href="#">Thiébou Guinar</a></li> 
              
              </ul> 
            </div> 
          <a class="btn btn-default" href="#" role="button">Itinéraire</a>
          </p>
          <img class="img-circle" src="images/marseillais.jpg" alt="Lam Tikka">
          <h1>le Marseillais </h1>
          <p>Q3J5+5XC,Thies</p>
          <p>
            <div class="btn-group"> 
              <button type="button" class="btn btn-default dropdown-toggle"
            data-toggle="dropdown">Menu <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="#">Thiébou Dieun</a></li> 
                <li><a href="#">Thiébou Guinar</a></li> 
                <li><a href="#">Gateaux</a></li> 
                <li><a href="#">Boissons</a></li> 
                <li><a href="#">Paella au fruit de mer</a></li> 
              </ul> 
            </div> 
          <a class="btn btn-default" href="#" role="button">Itinéraire</a>
          </p>
          <img class="img-circle" src="images/diaxen.png" alt="Lam Tikka">
          <h1>Dianxen resto</h1>
          <p>Av Jean B E Collin,Thies</p>
          <p>
            <div class="btn-group"> 
              <button type="button" class="btn btn-default dropdown-toggle"
            data-toggle="dropdown">Menu <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="#">Pizzaria</a></li> 
                <li><a href="#">Fast-Food</a></li> 
                <li><a href="#">Dibi</a></li> 
                <li><a href="#">Poulet</a></li> 
                <li><a href="#">Patisserie</a></li> 
                <li><a href="#">Glacier</a></li> 
              </ul> 
            </div> 
          <a class="btn btn-default" href="#" role="button">Itinéraire</a>
          </p>
          <img class="img-circle" src="images/sarafina.jpg" alt="Lam Tikka">
          <h1>Restaurant Sarafina</h1>
          <p>Av Lamine Gueye,Thies</p>
          <p>
            <div class="btn-group"> 
              <button type="button" class="btn btn-default dropdown-toggle"
            data-toggle="dropdown">Menu <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="#">Patisserie</a></li> 
                <li><a href="#">jus de fruit</a></li> 
                <li><a href="#">Fruit de Mer</a></li> 
                <li><a href="#">Café Expresso</a></li>
                <li><a href="#">Burger</a></li>

              </ul> 
            </div> 
          <a class="btn btn-default" href="#" role="button">Itinéraire</a>
          </p>
          <img class="img-circle" src="images/pamanda.png" alt="Lam Tikka">
          <h1>Pamanda</h1>
          <p>Guinth Rue Amadou Sow,Thies</p>
          <p>
            <div class="btn-group"> 
              <button type="button" class="btn btn-default dropdown-toggle"
            data-toggle="dropdown">Menu <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="#">Ensalada de Frutas</a></li> 
                <li><a href="#">Couscous Royal</a></li> 
                <li><a href="#">Crêpes mille trous</a></li> 
                <li><a href="#">Makrouts</a></li> 
              </ul> 
            </div> 
          <a class="btn btn-default" href="#" role="button">Itinéraire</a>
          </p>
          <img class="img-circle" src="images/big faim.png" alt="Lam Tikka">
          <h1>Big Faim</h1>
          <p>Q3VF+WJX,Thies</p>
          <p>
            <div class="btn-group"> 
              <button type="button" class="btn btn-default dropdown-toggle"
            data-toggle="dropdown">Menu <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="#">Pizzaria</a></li> 
                <li><a href="#">Boissons</a></li> 
                <li><a href="#">Fast-Food</a></li> 
                <li><a href="#">Restaurant</a></li> 
              </ul> 
            </div> 
          <a class="btn btn-default" href="#" role="button">Itinéraire</a>
          </p>
        </div>
      </div><!-- /.row -->
	</div>


   <div class="container marketing">
   <div id="myCarousel4" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
      <div class="item active">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Poisson et Frites <span class="text-muted">C'est très croustillant</span></h2>
        </div>
        <div class="col-md-5">
          <img src="images/fish-and-chips.png" alt="Fish and Chips">
        </div>
      </div>
      </div>   
	<div class="item">
      <div class="row featurette">
        <div class="col-md-5">
          <img src="images/burger.png" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"> Burger <span class="text-muted">Delicieux.</span></h2>
        </div>
      </div>
      </div>
      </div>
      </div>
	   </div>
    </div><!-- /.carousel -->	  
    </div><!-- /.container -->
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
		<div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
		</div>
      </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ url('https://code.jquery.com/jquery-1.10.2.min.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/holder.js')}}"></script>
  </body>
</html>
