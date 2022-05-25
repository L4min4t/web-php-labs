


<?php
include("pages/head.php");
function Page($page){
    switch ($page) {
        case "main":
            include("pages/main.php");
            break;
        case "menu":
            include("pages/menu.php");
            break;
        case "find-us":
            include("pages/find-us.php");
            break;
        default:
            include("pages/main.php");
    }
}
if($_GET['page']){
    $page = $_GET['page'];
    Page($page);
} else {
    Page('main');
}
include("pages/foot.php");
?>


