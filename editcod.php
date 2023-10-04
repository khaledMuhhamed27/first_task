<?php
if (isset($_POST['saveedit'])) {
    require 'config.php';
    $sdata = new insertData();
    $sdata->setTitle($_POST['title']);
    $sdata->setAuthor($_POST['author']);
    $sdata->setPrice($_POST['price']);
    $sdata->setId($_POST['saveedit']);

    $sdata->updateD();
    echo "<script>alert('has been successfully updated');document.location='index.php'</script>";
    // finaly


}
