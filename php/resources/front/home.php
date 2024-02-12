<?php include "temp/header.php"; ?>
    Front Side <br>
    <?php 
        foreach($user as $key=>$v){
            echo "$key = $v <Br>";
        }
    ?>
    <form method="" action="save-data">
        <input type="text" name="user"> <button type="submit">Submit</button>
    </form>
<?php include "temp/footer.php"; ?>