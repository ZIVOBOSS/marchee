

<!DOCTYPE html>
<html lang="en">
<head>
  {{-- <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

  <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
  <link href="/css/motdupresident.css"   rel="stylesheet">
<style>


.row {
  margin: 15px;
}
    </style>
</head>

<body>

<br/><br/><br/><br/>
 <br/><br/>
 <br/><br/>


<h1 class="mb-5 text-warning"> Rencontres</h1>
 <div class="container m-auto">
    <div class="row container m-auto">
      <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 d-block ">
        <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded d-block img-fluid w-50">
      </a>

      <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
        <img src="https://unsplash.it/600.jpg?image=252" class="rounded d-block img-fluid w-50">
      </a>
      <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
        <img src="https://unsplash.it/600.jpg?image=253" class="rounded d-block img-fluid w-50">
      </a>
    </div>
    <div class="row">
      <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
        <img src="https://unsplash.it/600.jpg?image=254" class="rounded d-block img-fluid w-50">
      </a>
      <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
        <img src="https://unsplash.it/600.jpg?image=255" class="rounded d-block img-fluid w-50">
      </a>
      <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
        <img src="https://unsplash.it/600.jpg?image=256" class="rounded d-block img-fluid w-50">
      </a>
    </div>
  </div>

<br><br><br>


</body>
</html>

<script>

$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
    </script>
