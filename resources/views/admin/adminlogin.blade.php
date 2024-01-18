<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
.bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}

body{
  background: linear-gradient(180deg, #680E0E 0%, #D21919 100%);
}

    </style>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

   

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5" style="">

          <form style="width: 35rem; padding-left: 150px;">

            <h3 class="fw-normal mb-4 pb-3" style="letter-spacing: 1px;">SELAMAT DATANG, ADMIN</h3>

            <div class="form-outline mb-4 pb-2">
              <input type="email" id="form2Example18" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-2">
              <input type="password" id="form2Example28" class="form-control form-control-lg" />
            </div>
            <div>
              <input type="checkbox" name="show">
              <label for="show">Show Password</label>
            </div>

            <div class="pt-4 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="button" style="width: 10rem; float: right; background-color: #F90; color:black">LOGIN</button>
            </div>


          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="image/adminlogin.png"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
</body>
</html>