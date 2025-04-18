<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisterGlow - Your Beauty Oasis</title>

    <!-- Bootstrap 5.3 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f5eadd;
        }
        .btn-book {
            background-color: #914424;
            color: white;
        }
        .btn-book:hover {
            background-color: #7a331a;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light px-4">
        <a class="navbar-brand fw-bold" href="#">SISTERGLOW</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h1 class="display-4 fw-bold">Your Beauty <br><span class="display-5">Oasis</span></h1>
                <p class="lead text-secondary mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="btn btn-book px-4 py-2 rounded">Book Now</a>
                    <a href="#" class="btn btn-outline-dark px-4 py-2 rounded">Shop Products</a>
                </div>
            </div>

            <!-- Image -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/model.png') }}" alt="Beauty Model" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>

</body>
</html>
