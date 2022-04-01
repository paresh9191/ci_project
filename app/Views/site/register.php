
<div class="container">

<div class="row justify-content-md-center">
<div class="col-6">
<!-- <div class="col-6" id="notification" style="display: none;">
  <span class="dismiss"><a title="dismiss this notification">x</a></span>
</div> -->
<h1>Sign Up</h1>
<div id="massage"></div>
<?php if(isset($validation)):?>
<div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif;?>
<form action="" id="registerUser" name="registerUser" method="post">
<div class="mb-3">
<label for="InputForName" class="form-label">Name</label>
<input type="text" name="name" class="form-control" id="InputForName" value="">
</div>
<div class="mb-3">
<label for="InputForEmail" class="form-label">Email address</label>
<input type="email" name="email" class="form-control" id="InputForEmail" value="">
</div>
<div class="mb-3">
<label for="InputForContact" class="form-label">Contact No</label>
<input type="phone" name="phone" class="form-control" id="InputForContact" value="">
</div>
<div class="mb-3">
<label for="InputForDate" class="form-label">DOB</label>
<input type="Date" name="DOB" class="form-control" id="InputForDate"  value=""
       min="2008-01-01" max="2018-12-31">
</div>
<div class="mb-3" style="position: relative">
<label for="InputForPassword" class="form-label">Password</label>
<input name="password" type="password" id="InputForPassword" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number"
        class="form-control" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" />
        <i class="far fa-eye" style="position: absolute; right: 10px; top: 60%;" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
</div>
<div class="mb-3" style="position: relative">
<label for="InputForConfPassword" class="form-label">Confirm Password</label>
<input type="password"  name="confirmpassword"  class="form-control" id="Confirmpassword" required>
<div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
<i class="far fa-eye" style="position: absolute; right: 10px; top: 60%;" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
</div>
<label>Gender</label>
<div class="mb-3">
<input type="radio" name="gender" value="male"> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<input type="radio" name="gender" value="other"> Other
</div>

    	<input type='submit' value='Submit' id='btClickMe' class='btn btn-primary submit' />

            
    <!-- <p id="msg"></p> --> 
           
</form>
</div>
</div>
</div>




