<!--<h1>Home</h1>-->
<button onclick="to_home()" class="btn btn-dark">Back</button>
<script>
        function to_home() {
$.post("pages/home/home_main.php", {},function (data) {
      $("#contents").html(data);  
    });
}  
</script>

<div class="container-fluid">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Feedback (HOME).jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Feedback (HOME).jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Feedback (HOME).jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>