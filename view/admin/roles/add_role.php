<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>

   <style>

    
    .card{
        width:100%;
        border : none;
        background-color:transparent;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .card img{
        width:200px;
        border-radius:50%;
        object-fit:cover;
    }
    .card label{
        margin-top:30px;
        text-align:center;
        height:40px;
        cursor:pointer;
        font-weight:bold;
        margin-bottom:20px;
    }
    .card input{
        display:none;
    }
    form span.error-msg{
        color:red;
        width:100%;
        display:flex;
        margin-left:30%;
        margin-bottom:20px;
      }
   </style>
</head>

<body class="bg-dark text-light">
   <div class="container mt-5">
      <div class="text-center mb-4">
         <h3>Add New User Role</h3>
         <p class="text-muted">Complete the form below to add a new student</p>
      </div>

      <div class="container d-flex justify-content-center" style="margin-top:5%;">
         <form action="../../../controller/register_controller.php" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">
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
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <script>
      let image = document.getElementById("image");
      let input = document.getElementById("input-file");

      input.onchange=()=>{
         image.src= URL.createObjectURL(input.files[0]);
      }
   </script>
</body>

</html>