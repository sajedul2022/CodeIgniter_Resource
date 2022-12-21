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
                        </tr>

                    <?php  } ?>

                </tbody>
            </table>






        </div>
    </div>

</div>

<?php echo view('includes/footer.php') ?>