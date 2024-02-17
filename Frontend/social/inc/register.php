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
    padding: 20px;
    font-family: Arial, Helvetica, sans-serif;
    border: 1px solid #ccc;
}
label{
    display: block;
}
.inp{
    margin-bottom: 5px;
}
input{
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button{
    background-color: rgb(226, 233, 226);
    padding: 5px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
    cursor: pointer;


}
    </style>
</head>

<body>
    <form method="post" action="<?php echo URL."register/save-user"; ?>">
        <?php echo flash("msg"); ?>
        <h2>Login</h2>
        <div class="inp">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
        </div>
        <div class="inp">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email">
        </div>
        <div class="inp">
            <label for="pass">Password</label>
            <input type="password" name="pass" placeholder="Enter Password">
        </div>
        <button type="submit">Create</button><br>
        <a href="<?php echo URL; ?>login">Already have account</a>
    </form>
</body>

</html>