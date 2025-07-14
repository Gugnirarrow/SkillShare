    <?php
    require "../connection.php";
    session_start();
        $email = $_POST['username'];
        $pass  = $_POST['password'];
        $hash  = password_hash($pass,PASSWORD_DEFAULT);

        $search = "SELECT * FROM accounts where email like '$email'";
        $result = mysqli_query($conn,$search);
        $count  = mysqli_num_rows($result);

        if($count <1)
            echo "<script>
                    alert('User does not exist');
                    window.location.href = 'login.html';
                </script>";


        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];

        $stmt = "update accounts set password='{$hash}' where email='{$email}'";
        $exec = mysqli_query($conn,$stmt);

        if($exec){
            echo "<script>
            alert('Password Resetted');
            window.location.href='../login/login.html';
            </script>";
        }
        else{
            echo "<script>
                alert('Unable to reset password');
                window.location.href = 'login.html';
            </script>";
        }
    ?>