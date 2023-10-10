<?php

  include("classes/Users.php");
  $u1 = new Users();

  if(isset ($_POST['add_user'])){
    
    $u1->insert($_POST);
    
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
      <div class="row">
        <div class="col-12">
          <h1
            class="display-2 bg-danger text-light text-center py-4 text-uppercase"
          >
            crud operations
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!-- table start -->
          <table class="table table-bordered">
            <tr>
              <th>#Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
            <?php
            
              $data =  $u1->show_users();
              $x = 1;
              while($row = mysqli_fetch_assoc($data)){?>
                <tr>
                  <td><?php echo $x++;?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td>
                    <a href="edit.php?id=<?php 
                    echo $row['id'];?>" class="btn btn-sm btn-info">Edit</a>
                    <a href="delete.php?id=<?php 
                    echo $row['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
             <?php 
                }


            ?>


            
          </table>
        </div>
        <div class="col-lg-4">
          <!-- form start -->
          <form action="" method="POST" class="p-5 shadow">
            <h2 class="text-center text-danger display-6 mb-3">User Info.</h2>
            <div class="form-group mb-3">
              <input
                type="text"
                name="myname"
                class="form-control"
                placeholder="Enter your name"
                required
              />
            </div>
            <div class="form-group mb-3">
              <input
                type="email"
                name="myemail"
                class="form-control"
                placeholder="Enter your email"
                required/>
            </div>
            <div class="form-group mb-3">
              <input
                type="password"
                name="mypassword"
                class="form-control"
                placeholder="Enter your password"
                required/>
            </div>
            <div class="form-group mb-3">
              <button type="submit" name="add_user" class="btn btn-dark w-100">
                Add User
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
