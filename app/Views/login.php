<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  
    <title>Login</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
  
            <div class="col-6">
                <h1>Log In</h1>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <form action="login/auth" id="login" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input name="password" type="password" id="InputForPassword" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number" class="form-control" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" />
                        <i class="far fa-eye" style="position: absolute; right: 10px; top: 60%;" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                                        </div>
                         <P> <input type="checkbox" name="remember"  > remember_me </P>                    
                    <button type="submit" value='Submit' class="btn btn-primary">submit</button>
                    <div id="register-link" class="text-right">
                 <p>New user ? <a href="register" class="text-info">  Register here</a></p>
                </form>
            </div>
              
        </div>
    </div>
      
    <!-- Popper.js first, then Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->
  </body>
</html>