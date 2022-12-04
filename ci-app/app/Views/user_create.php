<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeigniter 4 CRUD App Example - positronx.io</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1> User Entry Form</h1>

        <!-- Button -->
        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="/users">Show User</a>
        </div>
        <br>

        <!-- validation -->
        <?php $validation = \Config\Services::validation(); ?>

        <form action="<?php echo site_url('users/submit'); ?>" method="post">
            <table>
                <div class="form-group">
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="name" placeholder="Enter Name">
                        </td>

                        <!-- Error -->
                        <?php if ($validation->getError('name')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('name'); ?>
                            </div>
                        <?php } ?>

                    </tr>
                </div>

                <tr>
                    <div class="form-group">
                        <td>Email</td> <span></span>
                        <td>
                            <input type="email" name="email" placeholder="Enter Email">
                        </td>

                    </div>
                </tr>

                <!-- Error -->
                <?php if ($validation->getError('email')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php } ?>

                <tr>
                    <div class="form-group">


                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Send">
                        </td>
                    </div>
                </tr>
            </table>
        </form>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    </div>
</body>

</html>