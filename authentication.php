<?php      
        include('config.php');  
        $username = $_POST['user'];  
        $userpassword = $_POST['pass'];  
        echo "<h1><center> I du not know </center></h1>".$userpassword;
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $userpassword = stripcslashes($userpassword);  
            $username = mysqli_real_escape_string($link, $username);  
            $userpassword = mysqli_real_escape_string($link, $userpassword);  
          
            $sql = "select * from Users where username = '$username' and userpassword = '$userpassword'";  
            $result = mysqli_query($link, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                echo "<h1><center> Login successful </center></h1>";  
                header("location:faq.html");
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     
    ?>  