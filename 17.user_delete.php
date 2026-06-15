<?php

    // 關閉錯誤訊息顯示
    error_reporting(0);

    // 啟動 Session
    session_start();

    // 檢查使用者是否已登入
    if (!$_SESSION["id"]) {

        // 未登入時顯示提示訊息
        echo "請登入帳號";

        // 3 秒後跳轉到登入頁面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {

        // 建立資料庫連線
        $conn = mysqli_connect(
            "120.105.96.90",
            "immust",
            "immustimmust",
            "immust"
        );

        // 刪除使用者的 SQL 指令
        // 從網址列取得 id 參數，例如：
        // delete.php?id=test
        $sql = "delete from user where id='{$_GET["id"]}'";

        // 顯示 SQL 指令（除錯用）
        // echo $sql;

        // 執行刪除指令
        if (!mysqli_query($conn, $sql)) {

            // 刪除失敗
            echo "使用者刪除錯誤";

        } else {

            // 刪除成功
            echo "使用者刪除成功";
        }

        // 3 秒後返回使用者管理頁面
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }

?>
