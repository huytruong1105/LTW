<?php
    $conn = mysqli_connect("localhost","root","root","c5");
    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $sql_check = "select * from huytruong_chucvu where macv = '" .$_POST["macv"] ."'"; 
    $result_check = mysqli_query($conn,$sql_check);
    if (mysqli_num_rows($result_check)>0){
        echo '<meta http-equiv="refresh"
        content="5; url=http://localhost/huytruong_themcv.html">';
        echo '<h1>Da ton tai ma chuc vu nay</h1>';
    }
    else{
        $sql = "insert into huytruong_chucvu values ('" .
        $_POST["macv"] . "','" .
        $_POST["chucvu"] . "'" . ")";
        $result = mysqli_query($conn,$sql);
        echo '<meta http-equiv="refresh"
        content="5; url=http://localhost/huytruong_cv.php">';
        echo '<h1>Them thanh cong</h1>';
    
    }

    ?>