<!doctype html>
<html lang="en">

<?php
// header
require 'bootstrap.php';
$boot = new Btrap;
$boot->header();
// header end
?>


<body>
    <div class='container my-5'>

        <form action="signupcod.php" method="post">

            <!-- title inputs -->
            <div class="form-group">
                <label>title</label>
                <input type="text" class="form-control" placeholder="Enter The Title" name="title" autocomplete="off">
            </div>
            <!-- author input -->
            <div class="form-group">
                <label>author name</label>
                <input type="text" class="form-control" placeholder="Enter Book Name" name="author" autocomplete="off">
            </div>
            <!-- price input -->
            <div class="form-group">
                <label>book price</label>
                <input type="number" class="form-control" placeholder="Enter Thr Price" name="price" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="save" value="save">Save</button>
        </form>
    </div>
</body>

</html>