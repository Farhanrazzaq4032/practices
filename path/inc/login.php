<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <form action="<?php echo URL; ?>register/save-user">
    <h4>Create a new account</h4>
    <div class="inp">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Email">
    </div>
    <div class="inp">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password">
    </div>
    <button type="submit" name="submit">Create</button>
    <a href="<?php echo URL; ?>register">Create Account</a>
    </form>
</body>
</html>