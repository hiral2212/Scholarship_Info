<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css file  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body style="display: grid;place-items: center;width: 100%;height: 100vh;margin: 0;padding: 0;">

    <div class="container">
        <div class="row" style="margin: 0;">
            <div class="col-md-6 col-md-offset-3" style="box-shadow: 3px 2px 10px rgb(0 0 0);border: transparent solid 3px;padding: 0.5rem;">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="check_login.php" method="post"
                                    role="form" style="display: block;">
                                    <div class="radioGroups" style="display: flex;flex-wrap: wrap;justify-content: center;color: #adb5bd; font-size:medium ;">
                                        <div class="form-group" style="padding: 0 5rem;">
                                            <input type="radio" name="role" value="admin" id="Administrator" require>
                                            <label for="Administrator"> Administrator</label>
                                        </div>
                                        <div class="form-group" style="padding: 0 5rem;">
                                            <input type="radio" name="role" value="user" id="Special User" require>
                                            <label for="Special User"> Special User</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="username" id="username" tabindex="1"
                                            class="form-control" placeholder="Email"
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2"
                                            class="form-control" placeholder="Password">
                                    </div>
                                    <!-- <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                                                    class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" action ="add_super_user.php" method="POST" 
                                    role="form" style="display: none;">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="portalName" id="portalName" class="form-control"
                                            placeholder="Portal Name">
                                    </div>

                                    <div class="form-group">
                                        <input type="url" name="portalURL" id="portalURL" class="form-control"
                                            placeholder="Portal URL">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm-password" id="confirm-password"
                                            class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit"
                                                    tabindex="4" class="form-control btn-register" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js file -->
    <script src="js/script.js"></script>
</body>

</html>