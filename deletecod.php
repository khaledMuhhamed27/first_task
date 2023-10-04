<?php
if (isset($_POST['removItem'])) {
    require 'config.php';
    $sdata = new insertData();
    $bookId = $_POST['removItem'];

    // Call the deleteBook function

    $result = $sdata->deleteBook($bookId);

    if (($result)) {
        echo "<script>alert('Book deleted successfully');document.location='index.php'</script>";
    } else {
        echo "<script>alert('Error: $result');document.location='index.php'</script>";
    }
}
