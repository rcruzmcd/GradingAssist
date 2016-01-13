<?php

    if (!($_SESSION['valid_user'])) {
        header("Location: ../index.php" );
    }

?>