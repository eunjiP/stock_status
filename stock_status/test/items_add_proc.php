<?php
    //따로 분리할 필요없을시 삭제 예정
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
    } elseif(empty($items) && empty($item)) {
        print "<div>데이터가 입력되지 않아 실패하였습니다.</div>";
    }
    header("Location: items_add.php");
?>