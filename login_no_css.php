    <?php
    session_start();
        $email = $_POST['email'];
        $pass  = $_POST['password'];
        $registerfile = 'accounts.json';
        $data = json_decode(file_get_contents($registerfile),true);

        foreach($data as $key => $val){
            if($email === $val['email'] && password_verify($pass,$val['password'])){
                header("Location: profile.php");
                $_SESSION['session']=1;
                $_SESSION['email']=$email;
            }
            elseif($email != $val['email'] || password_verify($pass,$val['password'])){
                echo "
                    <script>
                    const check = document.getElementById('check');
                    check.innerHTML = '<p>Email or password is incorrect!</p>';
                    </script>";
                echo $email;
                echo $val['email'];
                password_verify($pass,$val['password']);
                exit;
            }
        }
    ?>