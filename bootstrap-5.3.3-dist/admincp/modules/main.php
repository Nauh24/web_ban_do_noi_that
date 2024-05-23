<div class="clear"></div>
<div class="main">
    <?php
    if(isset($_GET['action']) && $_GET['query']){
        $action = $_GET['action'];
        $query = $_GET['query'];
    }
    else {
        $action = '';
        $query = '';
    }
    if ($action == 'quanlidanhmucsanpham' && $query == 'them') {
        include 'quanlidanhmucsp/them.php';
        include 'quanlidanhmucsp/lietke.php';
    }
    elseif ($action == 'quanlidanhmucsanpham' && $query == 'sua') {
        include 'quanlidanhmucsp/sua.php';
    }
    elseif ($action == 'quanlisanpham' && $query == 'them') {
        include 'quanlisp/them.php';
        include 'quanlisp/lietke.php';
    }
    elseif ($action == 'quanlisanpham' && $query == 'sua') {
        include 'quanlisp/sua.php';
    }
    ?>
</div>