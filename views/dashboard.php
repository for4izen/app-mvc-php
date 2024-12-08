<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">MVC System</a>
            <div>
                <a href="/logout" class="btn btn-outline-danger">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="card p-4">
            <h1>Welcome, <?php echo $_SESSION['user']['username']; ?>!</h1>
            <p>This is your dashboard. Use the navigation above to manage your account.</p>
        </div>
    </div>