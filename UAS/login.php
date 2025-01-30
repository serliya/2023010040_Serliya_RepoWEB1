<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ANGKRINGAN PAK DHE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <?php include "header.php"; ?>

    <!-- Login Form -->
    <div class="container mt-5">
        <h1 class="text-center">Login ke Angkringan Pak Dhe</h1>
        <p class="text-center">Silakan masukkan email dan password Anda untuk masuk.</p>
        <div class="row justify-content-center">
            <div class="container mt-4">
                <h2>Login</h2>
                <form action="view/memesan.php" method="GET"> <!-- Diubah action ke memesan.html -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group mt-4">

                        <!-- Button for roles -->
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block"
                                    type="submit">
                                    <i class="bi bi-person"></i> Login
                                </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include "footer.php"; ?>
</body>
</html>
