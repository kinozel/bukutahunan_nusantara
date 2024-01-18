<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Girassol&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Girassol&display=swap');


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
  font-family: "Barlow Semi Condensed";
  background: linear-gradient(180deg, #680E0E 0%, #D21919 100%);
}
h1{
  font-family: 'Girassol', serif;
}
.normaltext{
  font-family: "Barlow Semi Condensed";
  font-weight: 500px;
}
a{
  text-decoration: none;
}

    </style>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

   

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5" style="">

        

          <form style="width: 40rem; padding-left: 150px;">
          <div class="logo" style="display: flex;">
            <img src="image/logosmkn1.png" alt="" style="padding-bottom: 50px;">

            <h1 style="padding-top: 18px; color:#F90">YEARBOOK SMKN 1 KOTA BEKASI</h1>
            </div>
            
            <h1 class="fw-normal mb-4 pb-3" style="letter-spacing: 1px; color:#F90">SELAMAT DATANG, ADMIN</h1>

            <div class="form-outline mb-4 pb-2">
              <input type="email" id="form2Example18" class="form-control form-control-lg" style="height: 40pt;" />
            </div>

            <div class="form-outline mb-2">
              <input type="password" id="form2Example28" class="form-control form-control-lg" style="height: 40pt;" />
            </div>
            <div class="normaltext" style="margin-left: 10px;">
            <input type="checkbox" style="transform: scale(1.5); margin-right: 8px;" name="show" onclick="togglePassword()">
              <label for="show" style="color:white; ">Show Password</label>
            </div>

            <div class="normaltext">
              <a href="/dashboard"><button class="btn btn-info btn-lg btn-block" type="button" style="width: 10rem; float: right; background-color: #F90; color:black">LOGIN</button></a>
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

<script>
  function togglePassword() {
    var passwordInput = document.getElementById("form2Example28");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }
</script>
</html>