<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        a {
            text-decoration: none;
            border: none;
            border-radius: 10px;
            padding: 5px;
            background-color: red;
            color: white;
        }

        textarea {
            margin-top: 10px;
            border: 2px solid #ccc;
            border-radius: 10px;
            width: 30%;
            height: 100px;
            padding: 10px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;

        }

        button {
            background-color: green;
            display: block;
            border: none;
            padding: 10px;
            color: white;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Dashboard</h1>
    <a href="<?php echo URL ?>logout">Logout</a>
    <form method="post" action="<?php echo URL; ?>save-post">
    <?php echo flash("msg") ?><br>
        <textarea name="comment" cols="10" rows="5"></textarea>
        <button type="submit" name="submit">Post</button>
    </form>
</body>
<?php
$post = new Post();
$posts = $post->fetchAll();
?>
<?php foreach($posts as $post): 
    $user = new User();
    $user = $user->get_user($post["user_id"]);
    ?>

<div>
    <h4><?php echo $user["emp_name"]; ?>
    <small><?php echo $user["emp_email"]?></small></h4>
    <h5><?php echo nl2br($post["comment"]); ?></h5>
    <a href="<?php echo URL; ?>delete?post_id=<?php echo $post["id"]; ?>">Remove</a>
    <hr>
</div>


<?php endforeach; ?>
</html>