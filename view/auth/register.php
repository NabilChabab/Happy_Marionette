
<?php
include "../../controller/register_controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        height: 100vh;
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
      }

      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }

      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }

      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }

      .row {
        margin-top: 5%;
      }

      .error input {
        border: 3px solid red;
      }

      .success input {
        border: 3px solid green;
      }

      form span.error-msg{
        color:red;
        width:100%;
        display:flex;
        margin-left:30%;
        margin-bottom:20px;
      }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            Happy Marionette <br />
            <span style="color: hsl(218, 81%, 75%)">All on One Platform</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Temporibus, expedita iusto veniam atque, magni tempora mollitia
            dolorum consequatur nulla, neque debitis eos reprehenderit quasi
            ab ipsum nisi dolorem modi. Quos?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        }
                    }
                
                ?>
                    <div class="form-outline mb-4">
                      <input type="text" id="firstname" class="form-control" placeholder="FullName" name="name"/>
                      <p class="text-danger"></p>
                    </div>
                

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email" class="form-control" placeholder="Email" name="email"/>
                  <p class="text-danger"></p>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control" placeholder="Password" name="password"/>
                  <p class="text-danger"></p>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="copassword" class="form-control" placeholder="Confirm Password" name="co_password"/>
                  <p class="text-danger"></p>
                </div>

                <div class="form-outline mb-4">

                <select class="form-select" aria-label="Default select example" name="role">
                    <option selected>Choose Role</option>
                    <option value="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                </select>

                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 col-12" name="submit">
                  Register
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class='bx bxl-meta'></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class='bx bxl-google'></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class='bx bxl-linkedin'></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class='bx bxl-github'></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/login.js"></script>
  <script src="../../../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>



<script>
  AOS.init();
</script>

</html>