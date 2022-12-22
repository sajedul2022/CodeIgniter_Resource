<!-- Header  -->
<?php echo view('includes/header.php') ?>
<!-- navbar -->
<?php echo view('includes/navbar.php') ?>


<div class="container">
    <div class="row">

        <div class="col-md-2"></div>

        <div class="col-md-8">
            <h1>Students List</h1>
            <table class="table table-bordered table-striped ">
                <thead class="thead-dark table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($students as $student) { ?>
                        <tr>
                            <th scope="row"> <?php echo $student['id']; ?> </th>
                            <td> <?php echo $student['name']; ?> </td>
                            <td> <?php echo $student['email']; ?> </td>
                            <td> <?php echo $student['phone']; ?> </td>
                            <td> <?php echo $student['address']; ?> </td>
                            <td> 
                                <a  class="btn btn-primary" href="student/edit/<?= $student['id'] ?>">Edit</a> 
                            </td>
                            <td> 
                                <a class="btn btn-danger" href="student/delete/<?= $student['id'] ?>">Delete</a> 
                            </td>
                        </tr>

                    <?php  } ?>

                </tbody>
            </table>

            <a href="/student/new" class="btn btn-primary" >Add Student </a>
        </div>
    </div>

</div>

<?php echo view('includes/footer.php') ?>