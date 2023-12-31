<!doctype html>
<html lang="en">

<?php
// header
require 'bootstrap.php';
$boot = new Btrap;
$boot->header();
// header end

require 'config.php';
$getDatas = new insertData();
$clickId = $_POST['butval'];
$task = $getDatas->readE($clickId);
?>

<!-- ... (previous code remains the same) ... -->

<body>
    <div class='container my-5'>

        <form action="editcod.php" method="post">

            <?php foreach ($task as $book) : ?>
                <!-- title inputs -->
                <div class="form-group">
                    <label>title</label>
                    <input type="text" class="form-control" placeholder="Enter The Title" name="title" value="<?php echo $book->title; ?>">
                </div>
                <!-- author input -->
                <div class="form-group">
                    <label>author name</label>
                    <input type="text" class="form-control" placeholder="Enter Book Name" name="author" value="<?php echo $book->author; ?>">
                </div>
                <!-- price input -->
                <div class="form-group">
                    <label>book price</label>
                    <input type="number" class="form-control" placeholder="Enter The Price" name="price" value="<?php echo $book->price; ?>">
                </div>
                <!-- isbn input -->
                <div class="form-group">
                    <label>book isbn</label>
                    <input type="text" class="form-control" placeholder="Enter Thr isbn" name="isbn" value="<?php echo $book->isbn; ?>">
                </div>
                <!-- date input -->
                <div class="form-group">
                    <label>book date</label>
                    <input type="date" class="form-control" name="bdate" value="<?php echo $book->published; ?>">
                </div>
                <button type="submit" class="btn btn-outline-primary" name="saveedit" value="<?php echo $book->id; ?>">Save Edit</button>
            <?php endforeach; ?>

        </form>
    </div>
</body>


</html>