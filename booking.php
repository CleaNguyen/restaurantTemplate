<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Template for restaurant, etc. Add here useful keyword for SEO">
    <meta name="author" content="Cléa Nguyen">

    <!--Custom CSS-->
    <link rel="stylesheet" href="CSS/stylesheet.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/1e882b039a.js" crossorigin="anonymous"></script>

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">

    <title>Booking</title>
  </head>
  <body>

    <header>
    <nav id="navbar1" class="navbar navbar-expand-lg navbar-dark text-white bg-dark fixed-top">
        <div class="container-fluid">
          <a id="namasteB" class="navbar-brand" href="index.html">Namaste</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav justify-content-end" id="navbarTogglerDemo03">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link link-light" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-light" href="index.html#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-light" href="index.html#menu">Our food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-warning" href="booking.html">Reservation</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link link-light" href="index.html#locationSection" tabindex="-1" aria-disabled="true">Find us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light" href="index.html#gallery">Gallery</a>
                  </li>
              </ul>
          </div>
        </div>
      </nav>  
</header>


    <!--Contact Form -->

<div class="container" id="formContainer">
    <h2 class="text-center featurette-heading" id="formContainerHeading">Book a table</h2>
    <img src="Images/photo5.jpg" class="img-fluid" id="restaurantPhoto" alt="Photo of the restaurant">


    <div id="result"></div>
<form id="formBooking" class="needs-validation" novalidate action="formProcessor.php" method="post">
    <div class="row g-2">
        <div class="col-md">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" name="name" placeholder="Your name" value="Your name" required>
            <label for="floatingInputGrid">Name and surname</label>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          </div>

            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid2" name="phone" placeholder="Phone number" value="Phone number" required>
                <label for="floatingInputGrid">Phone number</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
    </div>

    <div class="row g-2">
        <div class="col-md">
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputGrid3" name="email" placeholder="email@example.com" required>
                <label for="floatingInputGrid">Email address</label>
                <div class="invalid-feedback">Please enter an email address</div>
              </div>
        </div>
    </div>

<div class="row">
    <div class="col-md">
        <div class="form-floating">
            <input type="datetime-local" class="form-control" id="floatingInputGrid4" min="2021-05-11T18:30" max="2021-05-31T21:30" required>
            <label for="floatingInputGrid">Pick a date and time</label>
            <div class="invalid-feedback">Please enter a date and time</div>
        </div>
    </div>


</div>

    <div class="col-md">
        <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" required>
              <option selected>Click here to select</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
              <option value="6">Six</option>
              <option value="7">Seven</option>
              <option value="8">Eight</option>
            </select>
            <label for="floatingSelectGrid">Number of guests</label>
        </div>
    </div>


<div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" name="message" id="floatingTextarea2" rows="30" cols="70"></textarea>
    <label for="floatingTextarea2">Write here if you have any dietary requirements (vegetarian/vegan) or allergies.</label>
</div>

<div class="d-grid gap-2 col-6 mx-auto" id="buttonSend">
    <button class="btn btn-outline-warning" type="submit">Send</button>
  </div>
</form>
</div>


   <!--End of contact Form -->


   <!-- Footer -->
    <div>
    
    <footer class="text-white text-center text-lg-start bg-dark">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4 namaste1">About Us</h5>
  
            <p>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
              voluptatum deleniti atque corrupti.
            </p>
  
            <p>
              Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
              molestias.
            </p>
  
            <div class="mt-4">
            <h5 class="text-uppercase mb-4 namaste1">Follow us on social media</h5>
            <a href="" role="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
            <a href="" role="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-instagram"></i></a>
            <a href="" role="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
            <a href="" role="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
            </div>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4 pb-1 namaste1">Where to find us</h5>
  
  
            <ul class="fa-ul" style="margin-left: 1.65em;">
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Some address, 00-967, Country</span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">contact@example.com</span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 48 234 567 88</span>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4 namaste1">Opening hours</h5>
  
            <table class="table text-center text-white">
              <tbody class="fw-normal">
                <tr>
                  <td>Mon - Tue:</td>
                  <td>Closed </td>
                </tr>
                <tr>
                  <td>Wed - Sat:</td>
                  <td>15pm - 1am</td>
                </tr>
                <tr>
                  <td>Sunday:</td>
                  <td>11am - 15pm</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
  
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright Namaste - Cléa Nguyen
      </div>
    </footer>
  
  </div>
  <!-- End of .container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>


// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>

  </body>
</html>