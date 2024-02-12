<?php
if (isset($_SESSION["user"])) {
    include INC."dashboard.php";
} else {
    if (set_segment(1) == "register") {
        if (set_segment(2) == "save-user") {
            include INC . "save-user.php";
        } else
            include INC . "register.php";
    } else
        include INC . "login.php";
}
