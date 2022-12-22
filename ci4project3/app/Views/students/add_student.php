<!-- Header  -->
<?php echo view('includes/header.php') ?>
<!-- navbar -->
<?php echo view('includes/navbar.php') ?>


<div class="container">
    <div class="row">

        <div class="col-md-3">
            <h3>View Student </h3>
        <span><a href="/student" class="btn btn-primary">View All Student </a></span>
        </div>

        <div class="col-md-8">
            <h1>Students Entry </h1> 

            <!-- form -->

            <form method="post" action="/student/create" >
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Enter Email"></textarea>
                </div>
                
                <button type="submit"  class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>

</div>

<?php echo view('includes/footer.php') ?>