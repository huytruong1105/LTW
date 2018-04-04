<html>
<head>
    <title>Don Vi</title>
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
    $sql = "Select madv, donvi from huytruong_donvi";
    $result = mysqli_query($conn,$sql);
    echo "<h1>Danh Sach Don Vi</h1>";
    echo "<TABLE BORDER=1>";
    echo "<TR><TH>MADV</TH><TH>DONVI</TH></TR>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<TR>";
        echo "<TD> " . $row["madv"]. " </TD>";
        echo "<TD> " . $row["donvi"]. " </TD>";
        echo "</TR>";
    }
    $themDV_link = "/huytruong_themdv.html";
    echo "</TABLE>";
    echo '<br>';
    echo '<br>';
    echo '<a href="'. $themDV_link .'">';
    echo '<button>Them Don Vi</button>';
    echo '</a>';
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
</body>
</html>