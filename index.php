<!doctype html>
<html lang="en">
  <head>
    <style>
      .error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    border-radius: 5px;
    margin: 20px auto;
}
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ide Solusi Integrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5">
    <form action="login.php" method="post">
    <h3 class="mb-5  text-center">Sign in</h3>
    <?php if (isset ($_GET ['error'])){ ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php }?>
            <div class="form-outline">
              <input type="text" class="form-control form-control-lg" name="unidn"placeholder ="NIK" />
              <label class="form-label"></label>
            </div>
            <div class="form-outline">
              <input type="password" name="upassword" class="form-control form-control-lg" placeholder="Password"/>
              <label class="form-label"></label>
            </div>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Login</button>
            </form>
            <hr class="my-4">
            <div class="text-center">
              <img src="img/company.png" class="img-fluid" alt="Ide Solusi Integrasi">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>