<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	

<!-- FORMIO -->
<link rel="stylesheet" href="https://unpkg.com/formiojs@latest/dist/formio.full.min.css">
<script src="https://unpkg.com/formiojs@latest/dist/formio.full.min.js"></script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	
<link rel="stylesheet" href="styles.css">
	
</head>

<body class="bg-dark">
<nav class="navbar navbar-default bg-dark fixed-top">
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu 1
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#video">Video</a>
        <a class="dropdown-item" href="#cualquier-cosa">Cualquier Cosa</a>
        <a class="dropdown-item" href="#parallax-effect">Parallax</a>
	    <a class="dropdown-item" href="#seccion-interactiva">Seccion Interactiva</a>
     </div>
    </div>
	
	  <img src="capptus_original.png" width="150px" class="img-fluid" alt="Responsive image">
	
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu 2
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#seccion-interaccion">Seccion de Interacción</a>
	    <a class="dropdown-item" href="#seccion-contact">Contacto</a>
	    <a class="dropdown-item" href="#carousel">Marcas</a>
        <a class="dropdown-item" href="#footer">Footer</a>
      </div>
    </div>	
</nav>

	
	
  <div class="video-loop" id="video">
	<video autoplay="true" muted loop="true"  width="1519.50px">
	  <source src="https://capptus.com/assets/vids/bg_mp4.mp4" type="video/mp4">
	</video>
  </div>
  <div class="justify-content-center bg-dark" id="cualquier-cosa">
	<br>
	<br>
	  <h2 class="text-center text-light">CUALQUIER COSA</h2>
	  <p class="text-center text-light"> En esta seccion pondremos algo importante de la empresa como los integrantes del equipo. </p>
	  <div class="card-group">
        <div class="card bg-dark"> <img src="capptus_original.png" alt="Card Image Cap" class="card-img-top rounded-circle">
          <div class="card-body">
            <h5 class="card-title text-light">CEO</h5>
              <p class="card-text text-light">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      <div class="card bg-dark"> <img src="capptus_original.png" class="card-img-top" alt="Card Image Cap">
        <div class="card-body">
          <h5 class="card-title text-light">CO-FOUNDER</h5>
          <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    <div class="card bg-dark"> <img src="capptus_original.png" class="card-img-top" alt="Card Image Cap">
      <div class="card-body">
        <h5 class="card-title text-light">CFO</h5>
        <p class="card-text text-light">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
    </div>
  </div>

  </div>
  <div class="parallax"></div>
  <div id="parallax-effect">
	<br>
	<br>
	  <h2 class="text-center text-light">ESTE ES EL EFECTO PARALLAX</h2>
</div>
  <div class="parallax-2"></div>
  <div id="seccion-interactiva">
	<br>
	<br>
    <h2 class="text-center text-light">SECCION INTERACTIVA 4 ELEMENTOS</h2>
	  <br>
	  <br>
	<nav>
      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-seccion1-tab" data-toggle="tab" href="#nav-seccion1" role="tab" aria-controls="nav-home" aria-selected="true"><img alt="seccion1" src="light-saber.png" height="256px" width="256px"></a>
        <a class="nav-item nav-link" id="nav-seccion2-tab" data-toggle="tab" href="#nav-seccion2" role="tab" aria-controls="nav-profile" aria-selected="false"><img alt="seccion2" src="millennium-falcon.png" width="256px" height="256px"></a>
        <a class="nav-item nav-link" id="nav-seccion3-tab" data-toggle="tab" href="#nav-seccion3" role="tab" aria-controls="nav-contact" aria-selected="false"><img alt="seccion3" src="space-station.png" height="256px" width="256px"></a>
	    <a class="nav-item nav-link" id="nav-seccion4-tab" data-toggle="tab" href="#nav-seccion4" role="tab" aria-controls="nav-contact" aria-selected="false"><img alt="seccion4" src="star-wars.png" height="256px" width="256px"></a>
      </div>
    </nav>
  </div>
  <div id="seccion-interaccion">
	<br>
	<br>
    <h2 class="text-light text-center">Aqui se muestra el articulo interactivo</h2>
	<br>
	<br>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active text-light text-center" id="nav-seccion1" role="tabpanel" aria-labelledby="nav-seccion1-tab"><img width="855px" height="315px"  src="seccion-1.jpg"></div>
      <div class="tab-pane fade text-light text-center" id="nav-seccion2" role="tabpanel" aria-labelledby="nav-seccion2-tab"><img width="855px" height="315px" src="seccion-2.jpg"></div>
      <div class="tab-pane fade text-light text-center" id="nav-seccion3" role="tabpanel" aria-labelledby="nav-seccion3-tab"><img width="855px" height="315px" src="seccion-3.jpg"></div>
      <div class="tab-pane fade text-light text-center" id="nav-seccion4" role="tabpanel" aria-labelledby="nav-seccion4-tab"><img width="855px" height="315px" src="seccion-4.jpg"></div>
    </div>
  </div>
	<br>
	<br>
  <div id="cualquier-cosa-2" class="container">
	<br>
	<br>
    <h2 class="text-light text-center">GALERIA</h2>
	<div class="row">
	  <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
             data-image="gal-1.jepg"
             data-target="#image-gallery">
          <img class="img-thumbnail"
               src="gal-1.jpeg"
               alt="Another alt text">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
             data-image="gal-2.jepg"
             data-target="#image-gallery">
          <img class="img-thumbnail"
               src="gal-2.jpeg"
               alt="Another alt text">
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
             data-image="gal-3.jpg"
             data-target="#image-gallery">
          <img class="img-thumbnail"
               src="gal-3.jpg"
               alt="Another alt text">
          </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
              data-image="gal-4.jpg"
              data-target="#image-gallery">
           <img class="img-thumbnail"
                src="gal-4.jpg"
                alt="Another alt text">
           </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
              data-image="gal-5.png"
              data-target="#image-gallery">
              <img class="img-thumbnail"
                   src="gal-5.png"
                   alt="Another alt text">
           </a>
         </div>
		 <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
              data-image="gal6.png"
              data-target="#image-gallery">
           <img class="img-thumbnail"
                src="gal6.png"
                alt="Another alt text">
           </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
              data-image="gal-7.jpg"
              data-target="#image-gallery">
           <img class="img-thumbnail"
                src="gal-7.jpg"
                alt="Another alt text">
           </a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
              data-image="gal-8.jpg"
              data-target="#image-gallery">
           <img class="img-thumbnail"
                src="gal-8.jpg"
                alt="Another alt text">
           </a>
         </div>
		 <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
             <div class="modal-content">
               <div class="modal-header">
                 <h4 class="modal-title" id="image-gallery-title"></h4>
                 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                 </button>
               </div>
               <div class="modal-body">
                 <img id="image-gallery-image" class="img-responsive col-md-12" src="">
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                 </button>
				 <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                 </button>
               </div>
             </div>
           </div>
         </div>
	   </div>
     </div>
</div>
	<br>
	<br>
  <div id="seccion-contact">
	<br>
	<br>
    <h2 class="text-center text-light">CONTACTANOS</h2>
	  
  <div class="container form-top">
    <div class="row justify-content-center">
      <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
        <div class="panel panel-danger">
          <div class="panel-body">
            <form id="reused_form">
              <div class="form-group ">
                <div id="formio"></div>
		      </div>
	      </div>
        </div>
      </div> 
    </div> 
  </div>
  </div>
  <div id="carousel" class="container">
	  <br>
	  <br>
	  <h2 class="text-light text-center">MARCAS CAROUSEL</h2>
    <div class="row blog justify-content-center">
      <div class="col-md-12 justify-content-center">
        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner justify-content-center">
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-md-3">
                <a href="#">
                <img src="slide1.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                <img src="slide2.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                <img src="slide3.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
              <div class="col-md-3">
                <a href="#">
                <img src="slide4.png" alt="Image" style="max-width:100%;">
                </a>
              </div>
            </div>
		  <br>
		  <br>
		  <ol class="carousel-indicators">
            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
          </ol>
      </div>
    </div>
  </div>
</div>
  <br>
<div class="parallax-2"></div>
<footer id="footer" class="bg-dark text-center text-white">
  <div class="container p-4">
    <section class="mb-4">
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><ion-icon name="logo-facebook"></ion-icon>
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><ion-icon name="logo-twitter"></ion-icon>
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><ion-icon name="logo-google"></ion-icon>
      </a>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><ion-icon name="logo-instagram"></ion-icon></a>
    </section>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2020 Copyright:
  <a class="text-white" href="#">YUSEF YADA</a>
  </div>
</footer>
<!-- responsive navbar -->
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<!-- script del header transparente -->
<script>
	$(window).scroll(function() {
		$('nav').toggleClass('scrolled', $(this).scrollTop() > 200);						
	})
	</script>
<!-- script de formio -->
<script type="text/javascript">
  window.onload = function() {
    Formio.createForm(document.getElementById('formio'), 'https://ajwfqskepjnmzyr.form.io/formprueba');
  };
</script>
<!-- script galeria -->
<script>
	  let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });


$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39:
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return;
    }
    e.preventDefault();
  });
</script>
<!-- iconos -->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
