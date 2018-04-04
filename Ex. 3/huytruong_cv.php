<html>
<head>
    <title>Chuc Vu</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost","root","root","c5");
    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $sql = "Select macv, chucvu from huytruong_chucvu";
    $result = mysqli_query($conn,$sql);
    echo "<h1>Danh Sach Chuc Vu</h1>";
    echo "<TABLE BORDER=1>";
    echo "<TR><TH>MACV</TH><TH>CHUCVU</TH></TR>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<TR>";
        echo "<TD> " . $row["macv"]. " </TD>";
        echo "<TD> " . $row["chucvu"]. " </TD>";
        echo "</TR>";
    }
    $themDV_link = "/huytruong_themcv.html";
    echo "</TABLE>";
    echo '<br>';
    echo '<br>';
    echo '<a href="'. $themDV_link .'">';
    echo '<button>Them Chuc Vu</button>';
    echo '</a>';
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
</body>
</html>