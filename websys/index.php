<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Landing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Copperplate&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Coffee Shop Logo" style="width: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
            <nav class="navbar navbar-dark">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Apps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="text-white my-main mt-custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1 class="text-white" style="font-family: 'Copperplate', sans-serif;">START YOUR DAY</h1>
                    <h1 class="text-white">WITH A BLACK COFFEE</h1>
                    <div class="smaller-text">
                        <h2 class="text-white">Choose and taste delicious coffee from</h2>
                        <h2 class="text-white">the best beans</h2>
                        <button class="custom-btn btn btn-outline-orange">Order Now</button>
                        <button class="custom-btn btn btn-outline-orange">Learn About Us</button>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <img src="coffee.png" alt="Coffee Cup" class="img-fluid">
                </div>
            </div>
        </div>
    </main>
    <div id="popularCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col">
                    <!-- First product -->
                    <img src="Capuccino.png" class="d-block w-10" alt="First Product">
                    <div class="carousel-caption">
                        <h5>Title 1</h5>
                        <p>Description 1</p>
                    </div>
                </div>
                <div class="col">
                    <!-- Second product -->
                    <img src="frappe.png" class="d-block w-10" alt="Second Product">
                    <div class="carousel-caption">
                        <h5>Title 2</h5>
                        <p>Description 2</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more carousel items as needed -->
    </div>
    <a class="carousel-control-prev" href="#popularCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#popularCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


    <div class="login-signup-container">
        <button class="login-signup-btn btn btn-outline-orange">Login / Sign Up</button>
    </div>
    

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
