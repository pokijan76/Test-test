<?php
    require "header.php"
?>

    <main>
    <div class="wrapper-main">
            <section class="section-default">
                <h1>Sign Up</h1>
                <?php
                error_reporting (E_ALL ^ E_NOTICE);
                    if(isset($_GET['error'])){
                        if($_GET['error'] == "emptyfields"){
                            echo'<p class="signuperror">Fill all empty fields!</p>';
                        }
                        elseif($_GET['error'] == "invaliduidmail"){
                            echo'<p class="signuperror">Invalid Username and E-mail!</p>';
                        }
                        elseif($_GET['error'] == "invaliduid"){
                            echo'<p class="signuperror">Invalid Username!</p>';
                        }
                        elseif($_GET['error'] == "invalidmail"){
                            echo'<p class="signuperror">Invalid E-mail!</p>';
                        }
                        elseif($_GET['error'] == "passwordcheck"){
                            echo'<p class="signuperror">Passwords do not match!</p>';
                        }
                        elseif($_GET['error'] == "usertaken"){
                            echo'<p class="signuperror">Username is already taken!</p>';
                        }
                    }
                    elseif($_GET['signup'] == "success"){
                        echo'<p class="signupsuccess">Signup Success!</p>';
                    }
                ?>
                <form class="form-signup" action="../includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-Mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrpt" placeholder="Password Repeat">
                <button type="submit" name="signup-submit" class="btn">Sign Up</button>
                </form>
            </section>
    </main>

<?php
    require "footer.php"
?>