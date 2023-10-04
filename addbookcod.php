<?php
if (isset($_POST['save'])) {
    require 'config.php';
    $sdata = new insertData();
    $sdata->setTitle($_POST['title']);
    $sdata->setAuthor($_POST['author']);
    $sdata->setPrice($_POST['price']);
    $sdata->setIsbn($_POST['isbn']);
    $sdata->setPubData($_POST['bdate']);

    // Insert func
    $sdata->insrtD();
    echo "<script>alert('data saved successfully FROM Page');document.location='index.php'</script>";
}
