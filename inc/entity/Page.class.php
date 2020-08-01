<?php

class Page  {

    public static $title = "Week 13 Demo";

    static function header() { ?>

        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <title><?php echo self::$title; ?></title>
            <!-- <meta http-equiv="refresh" content="3"> -->

        </head>
        <body>
        <div class="container">
            <h1><?php echo self::$title; ?></h1>

           
    <?php }

    static function footer()    { ?>
        </div>
            <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </body>
            </html>
    <?php }

    static function showUserDetails(User $u) { ?>

    <FORM ACTION="" METHOD="POST">

        <div class="form-group row">
            <div class="col-md-6">
                Username: <?php echo $u->getUserName(); ?>
            </div>
            <div class="col-md-6">
                    Full Name: <?php echo $u->getFullName(); ?>
            </div>
        </div>        

        <div class="form-group row">
            <div class="col-md-6">
            <a class="btn btn-primary" href="userLogout.php" role="button">Logout</a>
            </div>
        </div>

        </div>

<?php }

    static function showLogin() { ?>
    
    <form class="form-signin" ACTION="" METHOD="POST" style="max-width: 330px">
        <h2 class="form-signin-heading">Please sign in</h2>
        <div class="form-group">
            <label for="inputUserName" class="sr-only">Username</label>
            <input type="text" id="inputUserName" class="form-control" placeholder="User Name" required autofocus name="username">
        </div>

        <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name=password>
        </div>

        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
        </div>
      </form>
    

    <?php }
    

}