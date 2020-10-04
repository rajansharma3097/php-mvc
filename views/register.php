<h1>Create An Account</h1>
<?php $form = \app\core\form\Form::begin('','post') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname'); ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname'); ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>
    <button class="btn btn-success">Submit</button>
<?php \app\core\form\Form::end() ?>

<!-- <form action="" method="post">  
  <div class="row">
    <div class="col">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstname" 
        class="form-control">
        <div class="invalid-feedback">
        </div>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="lastname">
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="confirmPassword">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->