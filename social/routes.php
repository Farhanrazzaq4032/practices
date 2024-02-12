<?php
if (isset($_SESSION["user"])) {
    if (set_segment(1) == "logout") {
        session_destroy();
        redirect();
    } elseif (set_segment(1) == "save-post") {
        include INC . "save-post.php";
    } elseif (set_segment(1) == "delete") {
        include INC . "delete-post.php";
    }
    include INC . "dashboard.php";
} else {
    if (set_segment(1) == "register") {
        if (set_segment(2) == "save-user") {
            include INC . "save-user.php";
        }
        include INC . "register.php";
    } else {
        if (set_segment(1) == "check-login") {
            include INC . "check-login.php";
        }
        include INC . "login.php";
    }
}
?>