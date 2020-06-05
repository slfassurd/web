<!-- Login view.  Will show the email and the password fields. -->

<?php require APPROOT . '/views/inc/header.php' ?>
<div class="overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body bg-primary text-white mt-5">
                <?php flash('register_success'); ?>
                <h2>Login:</h2>
                <p>Please fill in your credential's</p>
                <form action="<?php echo URLROOT; ?>/users/login" method="post">
                    <div class="form-group">
                        <label>Email:<sup>*</sup></label>
                        <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password:<sup>*</sup></label>
                        <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <div class="form-row">
                        <div class="col">

                        <input type="submit" class="btn btn-success btn-block" value="Login">
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-primary btn-block">No account? Register</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


