<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">MVC System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to the MVC System</h1>
            <p class="lead">A simple, modern, and responsive PHP application</p>
            <a href="/login" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </header>
    <main class="container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Feature 1</h5>
                        <p class="card-text">Description of feature 1 that makes this system awesome.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Feature 2</h5>
                        <p class="card-text">Description of feature 2 that makes this system modern.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Feature 3</h5>
                        <p class="card-text">Description of feature 3 that makes this system reliable.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-light text-center py-3">
        <p class="mb-0">© <?php echo date('Y'); ?> MVC System. All rights reserved.</p>
    </footer>