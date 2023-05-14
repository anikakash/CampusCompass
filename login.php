<?php include("header.php");?>
<?php include("dbcon.php");?>

    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
        <h1 class="text-center">
            Log In Portal
        </h1>
        <form method="POST" action="./login_task.php">
            <div class="mb-3 ">
                <label for="uname" class="form-label">Username</label>
                <input type="text" class="form-control" name="uname" id="exampleInputText1">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">

            </div>
            <input type="hidden" name="action" value="add">
            <button type="submit" class="btn btn-primary">LogIn</button>
        </form>
    </div>
    <?php include("footer.php"); ?>