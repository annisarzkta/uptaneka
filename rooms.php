<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Pelaksana Teknik Aneka - ROOMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="common.css"/>
    <?php require('inc/links.php')?>
</head>
<body class="bg-lightt">
  
  <?php require('inc/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3"> 
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none"> 
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">LOCATION</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1"> 
                  <label class="form-check-label" for="f1">Pagesangan</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-1"> 
                  <label class="form-check-label" for="f2">Kedungdoro</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none me-1"> 
                  <label class="form-check-label" for="f3">Malang</label>
                </div> 
              </div>
            </div>
          </div>
        </nav>
      </div>

      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K001.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K001</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K002.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K002</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Beds
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Meja Rias
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Lemari
                </span>
              </div>
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K003.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K003</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K004.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K004</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K005.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K005</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K006.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K006</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K007.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K007</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 kasur
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Meja Rias
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Lemari
                </span>
              </div>
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K008.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K008</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K009.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K009</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K010.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K010</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/K011.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar K011</h5>
              <div class="features mb-3">
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P001.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P001</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P002.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P002</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P003.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P003</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P004.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P004</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P005.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P005</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P006.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P006</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P007.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P007</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P008.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P008</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P009.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P009</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P010.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P010</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/P011.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kamar P011</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Kasur
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
              <div class="facilities mb-3">
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/RBambuApus.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Aula Bambu Apus</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Ruang Pertemuan
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Sound System
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Proyektor
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/RBatikArt.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Rapat Batik Art</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Ruang Pertemuan
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Sound System
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Proyektor
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/KelasPagesangan.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Kelas</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Ruang Pertemuan
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Sound System
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Proyektor
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/KelasKomputer.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Komputer</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Ruang Pertemuan
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Sound System
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Proyektor
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/Auditorium.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Audotium</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Ruang Pertemuan
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Sound System
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Proyektor
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/RSemanggi.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Rapat Semanggi</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Ruang Pertemuan
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Sound System
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Proyektor
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
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/RCeramicArt.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Rapat Ceramic Art</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Ruang Pertemuan
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Sound System
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Proyektor
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
              </div>
              <div class="location mb-4">
                <h6 class="mb-1">Location</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Malang
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align item center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="assets/rooms/Produksi.jpeg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-4">Ruang Produksi</h5>
              <div class="features mb-3">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Ruang Produksi Industri dan Keramik
                </span>
              </div>
              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Peralatan Produksi
                </span>
              </div>
              <div class="location mb-4">
                <h6 class="mb-1">Location</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Malang
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php require('inc/footer.php') ?>

  
</body>
</html>