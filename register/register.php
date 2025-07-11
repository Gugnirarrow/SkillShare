    <?php
    require "../connection.php";

        $name  = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $pass  = htmlspecialchars($_POST['password']);
        $hash  = password_hash($pass,PASSWORD_DEFAULT);
        
        $stmt = "SELECT * FROM accounts where email like '$email'";
        $result = mysqli_query($conn,$stmt);

        if(mysqli_num_rows($result)>=1)
            echo" <script>
                alert('Registration Fail email in use!');
            </script>";
        
        else{
            $register = "INSERT INTO accounts (email,name,password) values('$email','$name','$hash')";
            mysqli_query($conn,$register);
            echo" <script>
                alert('Registration Successful!');
                window.location.href='register.html';
            </script>";
        }
    ?>