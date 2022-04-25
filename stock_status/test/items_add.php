<?php
    //처음들어 갈때는 문구가 안나오도록 하기!!!
    include "db.php";

    $items = $_POST['items'];
    $item = $_POST['item'];
    if(!empty($items) && !empty($item))
    {
        $conn = get_conn();
        $sql = "INSERT INTO t_items
            (items, item)
            VALUES
            ('$items', '$item')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        print "<div>정상적으로 추가되었습니다.</div>";
    } elseif(empty($items) && !empty($item)) {
        print "<div>품목을 입력 해주세요</div>";
    } elseif(!empty($items) && empty($item)) {
        print "<div>품명을 입력 해주세요</div>";
    } elseif($result == false) {
        print "<div>데이터가 입력되지 않아 실패하였습니다.</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LH 재고 관리 현황</title>
</head>
<body>
    <h1>품목, 품명 추가</h1>
    <a href="main.html"><button>메인으로</button></a>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div><input type="text" name="items" placeholder="품목" require></div>
        <div><input type="text" name="item" placeholder="품명" require></div>
        <input type="submit" value="추가">
        <input type="reset" value="초기화">
    </form>
</body>
</html>