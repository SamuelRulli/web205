<?php
    // Session
    session_start();
?>
<html>
    <body>

        <?php
            // Set session
            $_SESSION["name"] = "Sam";
            $_SESSION["lastName"] = "Rulli";

            echo "Session variables are set.";
        ?>

    </body>
</html> 