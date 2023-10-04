<?php
// header 
require 'bootstrap.php';
$boot = new Btrap;
$boot->header();
// header end


// get data from database .. 
require 'config.php';
$getDatas = new insertData();
$tasks = $getDatas->readD();

?>
<table class="table table-striped mt-5">
    <thead>
        <tr>

            <th scope="col"># isbn</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Price</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($tasks as $task) : ?>
            <tr>
                <th scope="row"><?php echo $task->isbn; ?></th>
                <td><?php echo $task->title; ?></td>
                <td><?php echo $task->author; ?></td>
                <td><?php echo $task->price; ?></td>
                <td><?php echo $task->published; ?></td>
                <td>
                    <!-- button -->
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <form action="deletecod.php" method="post">
                            <button class="btn btn-danger m-2" type="submit" name="removItem" value="<?php echo $task->id; ?>">Delete</button>
                        </form>
                        <form action="edit.php" method="post">
                            <button type="submit" name="butval" class="btn btn-warning m-2" value="<?php echo $task->id; ?>">edit</button>
                        </form>
                    </div>
                    <!-- button -->

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div style="text-align: center">
    <a class="btn btn-success w-50" href="addbook.php">Add New Book</a>
</div>