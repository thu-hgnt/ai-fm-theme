<?php
get_header();
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body"> 
                    <?php
                    if ( ! is_user_logged_in() ) { // Display WordPress login form:
                        $args = array(
                            'redirect' => home_url('/'), 
                            'form_id' => 'loginform-custom',
                            'label_username' => __( 'Username custom text' ),
                            'label_password' => __( 'Password custom text' ),
                            'label_remember' => __( 'Remember Me custom text' ),
                            'label_log_in' => __( 'Log In custom text' ),
                            'remember' => true
                        );
                        wp_login_form( $args );
                    } else { // If logged in:
                        wp_loginout( home_url() ); // Display "Log Out" link.
                        echo " | ";
                        wp_register('', ''); // Display "Site Admin" link.
                    }
                    ?>
                    <!-- <form action="<?php echo site_url( '/wp-login.php' ); ?>" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="user_login" name="log" type="email" placeholder="name@example.com" />
                            <label for="user_login">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="user_pass" name="pwd" type="password" placeholder="Password" />
                            <label for="user_pass">Password</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" name="rememberme"/>
                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="password.html">Forgot Password?</a>
                            <a class="btn btn-primary" href="index.html">Login</a>
                        </div>
                    </form> -->
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
