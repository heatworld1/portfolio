<?php
if ($_GET['randomId'] != "jHhC9QHgX06RFHXt0Ts8qkexqysgVY4CWLAEgyPy2foQi9b7Ylpb8dZTWhr_UAEU") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
