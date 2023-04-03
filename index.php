<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Pelaksana Teknik Aneka - HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <?php require('inc/links.php')?>
</head>
<body class="bg-lightt">
  
  <?php require('inc/header.php') ?>

  <!-- Caraousel -->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/home1.jpg" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="assets/home2.jpg" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="assets/home3.jpg" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="assets/home4.jpg" class="w-100 d-block"/>
      </div>
    </div>
  </div>

  <!-- check availability form -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-in</label>
              <input type="date" class="form-control shadow-none"> 
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-out</label>
              <input type="date" class="form-control shadow-none"> 
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Location</label>
              <select class="form-select shadow-none">
                <option value="1">Pagesangan</option>
                <option value="2">Kedungdoro</option>
                <option value="3">Malang</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="assets/rooms/P001.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Ruang Kamar P001</h5>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Kamar
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Kamar Mandi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Meja Rias
                </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Lemari
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Televisi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
            </div>
            <div class="location mb-4">
              <h6 class="mb-1">Location</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Pagesangan
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="assets/rooms/K001.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Ruang Kamar K001</h5>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Kasur
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Meja Rias
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Lemari
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Televisi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
            </div>
            <div class="location mb-4">
              <h6 class="mb-1">Location</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Kedungdoro
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="assets/rooms/Auditorium.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Ruang Auditorium</h5>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ruang Pertemuan
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Proyektor
              </span>
            </div>
            <div class="location mb-4">
              <h6 class="mb-1">Location</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Kedungdoro
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>> </a>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay:{
        delay: 3500,
        disableOnInteraction: false,
      }
    });
  </script>

</body>
</html>