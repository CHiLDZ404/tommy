<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Website Galeri Foto</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
        <button class="navbar-togler" type="button"dta-bs-toggle="collapse" data-bs-target="#navbarNavAltmarkup" aria-controls="navbarNavAltmarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
</button>
<div class="collapse navbar-collapse mt-2" id="navbarNavAltmarkup">
    <div class="navbar-nav me-auto">
       
</div>
<a href="register.php" class="btn btn-outline-primary m-1"> 
    Daftar</a>
    <a href="login.php" class="btn btn-outline-success m-1"> 
    Masuk</a>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card-body bg-light">
                <div class="text-center">
                    <h5>Daftar Akun Baru</h5>
                </div>
                <form action="config/aksi_register.php" method="POST">
                    <lable class="form-lable">Username</lable>
                    <input type="text" name="username" class="form-control" required>
                    <lable class="form-lable">Password</lable>
                    <input type="Password" name="password" class="form-control" required>
                    <lable class="form-lable">Email</lable>
                    <input type="email" name="email" class="form-control" required>
                    <lable class="form-lable">Nama Lengkap</lable>
                    <input type="text" name="namalengkap" class="form-control" required>
                    <lable class="form-lable">Alamat</lable>
                    <input type="text" name="alamat" class="form-control" required>
                    <div class="d-grid mt-2">
                        <button class="btn btn-primary" type="submit" name="kirim">DAFTAR</button>
                    </div>
                </form>
                <hr>
                <p>sudah punya akun? <a href="login.php">Login disini!</a></p>
            </div>
        </div>
    </div>
</div>

<footer class="d-flex judtify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 | TOMMY ZULYANA</p>
</footer>

<script type="text/javascript" src="assets/js/bootstrap.min.jss"></script>
</body>
</html>
