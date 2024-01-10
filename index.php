<?php
include 'authentication.php';
include 'categories.php';
include 'authors.php';
include 'books.php';
include 'comments.php';
include 'users.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Brainster Lab - 2</title>
    <style>
      .landing-bg{
        background: url("bg.jpg");
        background-size: cover;
        background-position: center;
        repeat: no-repeat;
        height: 450px;
        opacity: 0.8;
      }
      a{
        text-decoration: none;
        color: black;
        font-weight: bold;
      }
      .card{
        border: none;
      }
      img{
        width: 100%;
      }
    </style>
  </head>
  <body>
<div class="container-fluid bg-light">
  <div class="container py-2">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Brainster Library</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active mr-4">
              <a href="logIn.php"><button type="button" class="btn btn-dark">Log In</button></a>
            </li>
            <li class="nav-item">
              <a href="signUp.php"><button type="button" class="btn btn-dark">Sign Up</button></a>
            </li>
          </ul>
        </div>
    </nav>
  </div>
</div>

<div class="container-fluid text-right p-5 landing-bg">
  <div class="pr-5 py-5">
    <h1 class="display-2 font-weight-bold pb-3 text-danger">Brainster Library</h1>
    <h3>Good books don't give up all their secrets at once.</h3>
  </div>
</div>

<div class="container-fluid py-4">
  <div class="container">
    <div class="row mb-5">
      <div class="col">
        <input type="checkbox" id="filter-mystery filter" />
        <label for="filter-mystery">Mystery</label>

        <input type="checkbox" id="filter-thriller filter" />
        <label for="filter-thriller">Thriller</label>

        <input type="checkbox" id="filter-romance filter" />
        <label for="filter-romance">Romance</label>

        <input type="checkbox" id="filter-history filter" />
        <label for="filter-history">History</label>

        <input type="checkbox" id="filter-poetry filter" />
        <label for="filter-poetry">Poetry</label>
      </div>
      
    </div>
    
    <div class="row">
      <div class="col-3">
        <a href="">
          <div class="card mystery" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card mystery</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card mystery" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card mystery</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card mystery" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card mystery</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card mystery" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card mystery</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card thriller" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card thriller</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card thriller" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card thriller</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card thriller" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card thriller</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card romance" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card romance</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card romance" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card romance</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card romance" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card romance</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card history" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card History</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card history" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card History</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card poetry" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card Poetry</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-3">
        <a href="">
          <div class="card poetry" style="width: 18rem;">
            <div class="pr-3">
              <img src="photo.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Card Poetry</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>
</div>






<script>
  var el = document.querySelector("h3");
  el.style.color = "blue";

  document.querySelector("#filter-mystery").addEventListener("change", filterMystery);
  document.querySelector("#filter-thriller").addEventListener("change", filterThriller);
  document.querySelector("#filter-romance").addEventListener("change", filterRomance);
  document.querySelector("#filter-history").addEventListener("change", filterHistory);
  document.querySelector("#filter-poetry").addEventListener("change", filterPoetry);


  fucntion filterMystery() {
    hideAllCards();

    if (document.querySelector("#filter-mystery").checked) {
      var mysteryCards = document.querySelectorAll(".mystery");
      mysteryCards.forEach((mysteryCard) => {
        mysteryCard.style.display = "inline-block";
      });
      document.querySelector("#filter-thriller").checked = false;
      document.querySelector("#filter-romance").checked = false;
      document.querySelector("#filter-history").checked = false;
      document.querySelector("#filter-poetry").checked = false;
    } else {
        showAllCards();
      }
  }


  fucntion filterThriller() {
    hideAllCards();

    if (document.querySelector("#filter-thriller").checked) {
      var thrillerCards = document.querySelectorAll(".thriller");
      thrillerCards.forEach((thrillerCard) => {
        thrillerCard.style.display = "inline-block";
      });
      document.querySelector("#filter-mystery").checked = false;
      document.querySelector("#filter-romance").checked = false;
      document.querySelector("#filter-history").checked = false;
      document.querySelector("#filter-poetry").checked = false;
    } else {
        showAllCards();
      }
  }


  fucntion filterRomance() {
    hideAllCards();

    if (document.querySelector("#filter-romance").checked) {
      var romanceCards = document.querySelectorAll(".romance");
      romanceCards.forEach((romanceCard) => {
        romanceCard.style.display = "inline-block";
      });
      document.querySelector("#filter-mystery").checked = false;
      document.querySelector("#filter-thriller").checked = false;
      document.querySelector("#filter-history").checked = false;
      document.querySelector("#filter-poetry").checked = false;
    } else {
        showAllCards();
      }
  }


  fucntion filterHistory() {
    hideAllCards();

    if (document.querySelector("#filter-history").checked) {
      var historyCards = document.querySelectorAll(".history");
      historyCards.forEach((historyCard) => {
        historyCard.style.display = "inline-block";
      });
      document.querySelector("#filter-mystery").checked = false;
      document.querySelector("#filter-thriller").checked = false;
      document.querySelector("#filter-romance").checked = false;
      document.querySelector("#filter-poetry").checked = false;
    } else {
        showAllCards();
      }
  }


  fucntion filterPoetry() {
    hideAllCards();

    if (document.querySelector("#filter-poetry").checked) {
      var poetryCards = document.querySelectorAll(".poetry");
      poetryCards.forEach((poetryCard) => {
        poetryCard.style.display = "inline-block";
      });
      document.querySelector("#filter-mystery").checked = false;
      document.querySelector("#filter-thriller").checked = false;
      document.querySelector("#filter-romance").checked = false;
      document.querySelector("#filter-history").checked = false;
    } else {
        showAllCards();
      }
  }


  function hideAllCards() {
    var allCards = document.querySelectorAll(".card");
    allCards.forEach((card) => {
      card.style.display = "none";
    });
  }

  function showAllCards() {
    var allCards = document.querySelectorAll(".card");
    allCards.forEach((card) => {
      card.style.display = "inline-block";
    });
  }
</script>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>