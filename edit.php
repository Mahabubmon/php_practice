<?php
    include("classes/Users.php");
    $u1 = new Users();

    $id = $_GET['id'];

    if(isset($_GET['id'])){
       $data = $u1->edit_user($id);
      $row = mysqli_fetch_assoc($data);
        
       
    }

    if(isset($_POST['update_user'])){
        $u1->update_user($_POST,$id);

    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CRUD OPERATIONS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      
      <div class="row vh-100 align-items-center" >
       
    
        <div class="col-lg-4 offset-lg-4">
          <!-- form start -->
          <form action="" method="POST" class="p-5 shadow">
            <h3 class="text-center text-danger display-6 mb-3">Update user info</h3>
            <div class="form-group mb-3">
              <input
                type="text"
                name="myname"
                class="form-control"
                placeholder="Enter your name"
                required value ="<?php echo $row['name'];?>"
              />
            </div>
            <div class="form-group mb-3">
              <input
                type="email"
                name="myemail"
                class="form-control"
                placeholder="Enter your email"
                required value ="<?php echo $row['email'];?>"/>
            </div>
            <div class="form-group mb-3">
              <input
                type="password"
                name="mypassword"
                class="form-control"
                placeholder="Enter your password"
                required value ="<?php echo $row['password'];?>"/>
            </div>
            <div class="form-group mb-3">
              <button type="submit" name="update_user" value=" Update User" class="btn btn-info w-100">
                Update User
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
