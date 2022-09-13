<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="kri" id="kri">
        <input type="submit" value="kri" name="btn">
        <button class="btn btn-primary">
            <a href="exp2.php?up_id=update" class="text-light">Update</a>
        </button>
    </form>
    <?php
        $kri = "krish";
        $me = "mehta";
        $ans = $kri." ".$me." ";
        echo $ans;
    ?>
</body>
</html>