
<?php $__env->startSection('main-body'); ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="regdiv">
    <form class="signup-form" action="registeruser" method="post">
<?php echo csrf_field(); ?>
      <!-- form header -->
      <div class="form-header">
        <h1>Create Account</h1>
      </div>

      <!-- form body -->
      <div class="form-body" >

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">Parent Name</label>
            <input type="text" name="parentname" class="form-input" placeholder="enter parent name" required="required" />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">kids name</label>
            <input type="text" name="kidsname" class="form-input" placeholder="kids name" />
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">Email*</label>
          <input type="email" name="email" class="form-input" placeholder="enter your email" required="required">
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password *</label>
            <input type="password" name="password" class="form-input" placeholder="enter your password" required="required">
          </div>

          <div class="form-group right">
            <label class="label-title">Gender:</label>
            <div class="input-group">
              <label for="male"><input type="radio" name="gender" value="male" name="gender"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" name="gender"> Female</label>
            </div>
        </div>
      
        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
    
          <div class="form-group">
            <label class="label-title">Interest</label>
            <div >
              <label><input type="checkbox" name="sub[]" value="music">Music</label>
              <label><input type="checkbox"name="sub[]"  value="reading">reading</label>
              <label><input type="checkbox" name="sub[]" value="story">story</label>
              <label><input type="checkbox" name="sub[]" value="cooking">cooking</label>
              <label><input type="checkbox" name="sub[]" value="camping">camping</label>
              <label><input type="checkbox"name="sub[]"  value="games">games</label>
            </div>
          </div>


          <div class="form-group ">
          <label class="label-title">Age group</label>
            <div >
      <select name="age" class="form-control">
      <option value="1-3" >age 1-3</option>
      <option value="3-5">age 3-5</option>
      <option value="5-7">age 5-7</option>
      <option value="7-9">age 7-9</option>
      
    </select>
            </div>
        </div>
        </div>

        <!-- Bio -->
        <div class="form-group">
          <label for="choose-file" class="label-title">Bio</label>
          <textarea class="form-input" rows="4" cols="50" name="bio" style="height:auto"></textarea>
        </div>
      </div>

      <!-- form-footer -->
      <div class="form-footer">
        <span>* required</span>
        <input type="submit" name="register" value="Register" > 
      </div>

    </form>



  </body>
</html>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.useregister', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\summercamp\resources\views/user/register.blade.php ENDPATH**/ ?>