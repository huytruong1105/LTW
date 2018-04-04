<html>
<body>
    <?php
    // PHP 5
    // $conn = mysql_connect("localhost","root","root")
    // or die("Could not connect: " . mysql_error());
    // $db = mysql_select_db("c5",$conn);
    // // $conn = mysql_connect("172.30.35.70","user_c5","puser_c5")
    // // or die("Could not connect: " . mysql_error());
    // // $db = mysql_select_db("db_c5",$conn);
    // $result = mysql_querry("Select manv,hoten, namsinh, gioitinh, donvi, chucvu, luong 
    //                         from huytruong_nhanvien, huytruong_donvi, huytruong_chucvu 
    //                         where huytruong_nhanvien.madv = huytruong_donvi.madv 
    //                         and huytruong_nhanvien.macv = huytruong_chucvu.macv 
    //                         order by huytruong_nhanvien.madv", $conn);
    // echo "<TABLE BORDER=1>";
    // echo "<TR><TH>MANV</TH><TH>Ho TEN</TH><TH>NGAY SINH</TH><TH>GIOI TINH</TH><TH>DON VI</TH><TH>CHUC VU</TH><TH>LUONG (Ngan VND)</TH></TR>";
    // while ($row = mysql_fetch_array($result)) {
    //     echo "<TR>";
    //     echo "<TD> " . $row["manv"]. " </TD>";
    //     echo "<TD> " . $row["hoten"]. " </TD>";
    //     echo "<TD> " . $row["namsinh"] . " </TD>";
    //     echo "<TD> " . $row["gioitinh"] . " </TD>";
    //     echo "<TD> " . $row["donvi"] . " </TD>";
    //     echo "<TD> " . $row["chucvu"] . " </TD>";
    //     echo "<TD> " . $row["luong"] . " </TD>";
    //     echo "</TR>";
    //     }
    // echo "</TABLE>";
    // mysql_free_result($result);
    // mysql_close($conn);

    // PHP 7
    $conn = mysqli_connect("localhost","root","root","c5");
    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    echo "<h1>Danh Sach Nhan Vien</h1>";
    $sql = "Select manv,hoten, namsinh, gioitinh, donvi, chucvu, luong 
            from huytruong_nhanvien, huytruong_donvi, huytruong_chucvu 
            where huytruong_nhanvien.madv = huytruong_donvi.madv 
            and huytruong_nhanvien.macv = huytruong_chucvu.macv 
            order by huytruong_nhanvien.madv";
    $result = mysqli_query($conn,$sql);
    echo "<TABLE BORDER=1>";
    echo "<TR><TH>MANV</TH><TH>Ho TEN</TH><TH>NGAY SINH</TH><TH>GIOI TINH</TH><TH>DON VI</TH><TH>CHUC VU</TH><TH>LUONG (Ngan VND)</TH></TR>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<TR>";
        echo "<TD> " . $row["manv"]. " </TD>";
        echo "<TD> " . $row["hoten"]. " </TD>";
        echo "<TD> " . $row["namsinh"] . " </TD>";
        echo "<TD> " . $row["gioitinh"] . " </TD>";
        echo "<TD> " . $row["donvi"] . " </TD>";
        echo "<TD> " . $row["chucvu"] . " </TD>";
        echo "<TD> " . $row["luong"] . " </TD>";
        echo "</TR>";
        }
    echo "</TABLE>";
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
</body>
</html>