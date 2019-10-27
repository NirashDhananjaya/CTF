<?php

if (isset($_GET['q'])) {

    $code = 'Sherlock';
    $mycode = $_GET['q'];
    if($mycode == '<script>alert()</script>') {
        echo "<script>alert('tresdfsgfs')</script>";
    }

    // echo '<script type="text/javascript">',     'jsfunction();',    '</script>'
    echo $mycode;
}
?>
