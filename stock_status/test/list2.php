<?php
    include "db.php";

    $conn = get_conn();
    $sql = "SELECT item FROM t_items WHERE items = '배관 및 밸브부속류'
    ORDER BY item";
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
    
        <?php
           while ($row = mysqli_fetch_assoc($result)) {
               $item = $row['item'];
            print "<label><input type='checkbox' name='item' value='$item'>$item</label><br>";
           }
        ?>
    </select>
</body>
</html>