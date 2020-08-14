<?php
    require "header.php"
?>

    <main>
    <div class="wrapper-main">
            <section class="section-default">
            <?php

            if (isset($_SESSION['userId'])){
            echo'<p>What is in your mind? ' , $_SESSION['userUid'];
            echo '
            <form>
            <input type="text" id="message" name="chat" autocomplete="off" autofocus placeholder="Text here">
            <button type="submit" name="chat-submit" class="btn">Send</button>
            </form>'; 
            }
            else{
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo'<p class="loginerror">Fill all empty fields!</p>';
                        }
                    else if(($_GET)['error'] == "wrongpwd"){
                        echo'<p class="loginerror">Wrong Password or Username</p>';
                        }
                    else if(($_GET)['error'] == "nouser"){
                        echo'<p class="loginerror">Wrong Password or Username</p>';
                        }
                    }
                echo '<p>Welcome to the Jungle</p>';

            }
            ?>
            </section>
    </div>
    </main>

<?php
    require "footer.php"
?>