<?php
    include "db.php";

    $conn = get_conn();
    $sql = "SELECT item FROM t_items WHERE items = '배관 및 밸브부속류'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <select name="item">
        <?php
           while ($row = mysqli_fetch_assoc($result)) {
               $item = $row['item'];
            print "<option value='$item'>$item</option>";
           }
        ?>
    </select>
</body>
</html>