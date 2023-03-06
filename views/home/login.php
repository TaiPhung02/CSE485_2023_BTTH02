<?php
include("views/includes/headerlogin.php");
?>
    <main class="container mt-5 mb-5">
        <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                    <?php
                include_once "./configs/DbConnection.php";
                        if($_POST){
                            $user_name = $_POST['user_name'];
                            $user_pass = $_POST['user_pass'];
                            $sql = "SELECT * FROM `users` WHERE tai_khoan='$user_name' AND mat_khau ='$user_pass';";
                            $result=mysqli_query($conn,$sql);
                            $row = mysqli_fetch_assoc($result);
                            if($row) {
                                $_SESSION['login'] = $row['quyen'];
                                header('Location:index.php?controller=category');
                            }
                            else if(($user_name || $user_pass) &&($user_name|| !$user_pass) &&(!$user_name || $user_pass)  && !$row){
                                echo '<p style="color:white;">Tên đăng nhập hoặc mật khẩu sai!</p>';
                            }
                            if(!$user_name|| !$user_pass){
                                    echo '<p style="color:white;">Hãy nhập tài khoản hoặc mật khẩu </p>';
                            }
                        }
                    ?>
                        <form action="login.php" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                                <input type="text" name="user_name" class="form-control" placeholder="username" >
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                                <input type="password" name="user_pass" class="form-control" placeholder="password" >
                            </div>
                            
                            <div class="row align-items-center remember">
                                <input type="checkbox">Remember Me
                            </div>
                            <div class="form-group">
                                <input type="submit" name="dangnhap" value="Login" class="btn float-end login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center ">
                            Don't have an account?<a href="#" class="text-warning text-decoration-none">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                        </div>
                    </div>
                </div>

        </div>
    </main>


<?php
include("views/includes/footer.php");
?>