<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donate - WebAside Child NGO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Little Lights Initiative Child NGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="./progrsm.php">Programs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="bg-light text-center py-5">
        <div class="container">
            <h1>Make a Difference</h1>
            <p>Your donation helps provide education, healthcare, and shelter to children in need.</p>
            <img src="./Image/d1.jpg" alt="Donate Image" class="img-fluid mt-3">
        </div>
    </header>
    
    <section class="container py-5">
        <h2 class="text-center mb-4">Donate Now</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Donation Amount ($)</label>
                        <input type="number" class="form-control" id="amount" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Donate</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; Little Lights Initiative </p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
