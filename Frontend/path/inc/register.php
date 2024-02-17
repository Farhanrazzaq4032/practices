<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <style>
        form{
            width: 400px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 10px;
        }
        label{
            display: block;
        }
        .inp{
            margin-bottom: 10px;
        }
        input{
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px;
        }
    </style>
</head>
<body>
    <form method="POST" action="<?php echo URL; ?>save-user">

    <div class="inp">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter name">
    </div>
    <div class="inp">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Email">
    </div>
    <div class="inp">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password">
    </div>
    <button type="submit" name="submit">Create</button>
    <a href="<?php echo URL; ?>login">Already account</a>
    <a href="<?php  ?>"></a>
    </form>
</body>
</html>