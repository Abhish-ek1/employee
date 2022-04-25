<?php include('layouts/header.php'); ?>
<br><br><br>

<form>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>

                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="cpassword" name="cpassword" class="form-control" id="cpassword" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </div>
</form>

<?php include('layouts/footer.php'); ?>