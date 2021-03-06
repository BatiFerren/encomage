<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Edit User</title>
</head>
<body>

<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="firstName1">First Name</label>
            <input class="form-control" id="firstName1" type="text" placeholder="" name="firstName" value="<?=$firstName?>">
        </div>
        <div class="form-group">
            <label for="lastName1">Last Name</label>
            <input class="form-control" id="lastName1" type="text" placeholder="" name="lastName" value="<?=$lastName?>">
        </div>
        <div class="form-group">
            <label for="inputEmail1">Email address</label>
            <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" name="email" value="<?=$email?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <? if ($err): ?>
        <div class="alert alert-danger" role="alert">
            <p><?=$err?></p>
        </div>
    <? endif; ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

