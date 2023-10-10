<?php

    class Users{

        private $con;



        public function __construct(){
            define("HOSTNAME", "localhost");
            define("USERNAME", "root");
            define("PASSWORD", "");
            define("DBNAME", "test5");

            $this->con  = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
            
            if ($this->con) {
               
            }
            
        }
        // User inser
        public function insert($data){

           $name = ucwords($data['myname']);
           $email = $data['myemail'];
           $password = $data['mypassword'];
           $sql = "INSERT INTO `users`(`id`,`name`,`email`,`password`) VALUES(NULL,'$name','$email','$password')";

           $result = mysqli_query($this->con,"$sql");

           if($result){
            header("Location:index.php");
           }
            
        

        }

        // user info show
        public function show_users(){
            $query = "SELECT * FROM `users`";
            return $result = mysqli_query($this->con,$query); 

        }

        // Delete Users

        public function delete_users($uid){
        
            $result = mysqli_query($this->con,"DELETE FROM `users` WHERE id = '$uid'");
            
            if($result){
                header("Location:index.php");
            }
        }

        // Edit users
        public function edit_user($uid){
            return $result = mysqli_query($this->con,"SELECT * FROM `users` WHERE id='$uid'");

        }

        // Update user
        public function update_user($info,$uid)
        {
             
            $name = ucwords($info['myname']);
            $email = $info['myemail'];
            $password = $info['mypassword'];

            $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE id ='$uid'";
            
            $fire = mysqli_query($this->con,$sql);

            if($fire){
                header("Location:index.php");
            }

        }


    }

   


?>