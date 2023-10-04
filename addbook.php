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

        <form action="addbookcod.php" method="post">

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
            <!-- isbn input -->
            <div class="form-group">
                <label>book isbn</label>
                <input type="text" class="form-control" placeholder="Enter Thr isbn" name="isbn" autocomplete="off">
            </div>
            <!-- date input -->
            <div class="form-group">
                <label>book date</label>
                <input type="date" class="form-control" name="bdate" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="save" value="save">Save</button>
        </form>
    </div>
</body>

</html>