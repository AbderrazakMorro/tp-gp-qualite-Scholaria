<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massira RH - Clinic Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Massira RH</a>
        </div>
    </nav>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-4 mb-4">Welcome to Massira RH</h1>
                <p class="lead mb-4">Your comprehensive clinic management solution</p>
                
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="h4 mb-3">System Overview</h2>
                        <p>Massira RH provides a complete suite of tools for managing your clinic's human resources:</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success"></i> Employee Management</li>
                            <li><i class="bi bi-check-circle-fill text-success"></i> Attendance Tracking</li>
                            <li><i class="bi bi-check-circle-fill text-success"></i> Schedule Planning</li>
                            <li><i class="bi bi-check-circle-fill text-success"></i> Performance Monitoring</li>
                        </ul>
                    </div>
                </div>

                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                    <?php if (!isset($_SESSION['user_id'])): ?>
                        <a href="pages/login.php" class="btn btn-primary btn-lg px-4">Login</a>
                        <a href="pages/register.php" class="btn btn-outline-secondary btn-lg px-4">Register</a>
                    <?php else: ?>
                        <a href="pages/dashboard.php" class="btn btn-primary btn-lg px-4">Go to Dashboard</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center text-muted py-4 mt-5">
        <p class="mb-0">&copy; <?php echo date('Y'); ?> Massira RH. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
