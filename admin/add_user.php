<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include('style.php') ?>
    <title>Dashboard</title>

</head>
<body>
    <form method="POST" action="functions/functions.php" class="w-50" mt-50>
        <div class="form_input mb-3">
            <input type="text" name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username">
        </div>
        <div class="form_input mb-3">
            <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
        </div>
        <input type="submit" name="login" value="LOGIN" class="btn btn-primary w-100"/>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
                    