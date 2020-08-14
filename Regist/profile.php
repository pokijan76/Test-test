<?php
    require "header.php"
?>

    <main>
    <div class="wrapper-main">
            <section class="section-default">
            <div class="profile">
            <h1>Your Profile</h1>
            <?php
            if (isset($_SESSION['userId'])){
               echo '<p>Username = ' , $_SESSION['userUid'];
               echo '<p>E-mail = ' , $_SESSION['userEmail'];
            }
            ?>
            </div>
            </section>
    </div>
    </main>

<?php
    require "footer.php"
?>