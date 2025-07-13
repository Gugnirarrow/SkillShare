    <?php
    require "../connection.php";
    session_start();
        $email = $_POST['username'];
        $pass  = $_POST['password'];

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

        if($row['email'] == $email && password_verify($pass,$row['password'])){
            echo "<script>
            alert('✅ Welcome back, {$name}! You are now logged in.');
            window.location.href='../Homepage';
            </script>";

            $_SESSION['session']=1;
            $_SESSION['email']=$email;
        }
        else{
            echo "<script>
                alert('Incorrect password');
                window.location.href = 'login.html';
            </script>";
        }
    ?>