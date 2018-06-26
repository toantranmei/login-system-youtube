<nav class="nav nav-custom">
    <h1>LOGIN</h1>
    <?php
        if (isset($_SESSION['u_id'])) {
            // display logout button
            echo '<a href="inc/logout.inc.php" class="btn btn-red signup">Logout</a>';
        } else {

            echo '<form action="inc/signin.inc.php" method="POST" class="form-signin">
                    <input type="text" placeholder="Username/Email" name="user_uid">
                    <input type="password" placeholder="Password" name="user_pwd">
                    <button type="submit" name="submit">Login</button>
                  </form>
                   <a href="signup.php" class="btn btn-red signup">Register</a>';
        }
    ?>
</nav>