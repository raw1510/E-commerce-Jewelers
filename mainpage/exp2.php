<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="div1" id="<?php $div1 = 'd1';
    echo $div1;?>">
        krish
    </div>
    <div class="div1" id="<?php $div2 = 'd2';
    echo $div2;?>">
        hello
    </div>
    <div class="div1" id="<?php $div3 = 'd3';
    echo $div3;?>">
        nai chale
    </div>
    <?php
                                            $user = "root";
                                            $pass = "";
                                            $servername = "localhost";
                                            $database = "adminpanel";
                                            
                                            $conn = mysqli_connect($servername , $user , $pass , $database);
                                            if(!$conn){
                                                echo"nai chale";
                                            }
                                            $sql = "SELECT goldprice FROM gold ORDER BY ID DESC LIMIT 1";
                                            
                                            if($result = mysqli_query($conn, $sql)){
                                                while($row = mysqli_fetch_row($result)){
                                                    $price = $row[0];
                                            }
                                        }
                                        else{
                                            echo" error showing gold price ";
                                        }
                                        ?>

                                        <?php
                                        echo"<br>";
                                            echo $price;
                                        ?>
</body>
</html>