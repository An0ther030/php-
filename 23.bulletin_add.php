<?php

    // 關閉錯誤訊息顯示
    error_reporting(0);

    // 啟動 Session
    session_start();

    // 檢查使用者是否已登入
    if (!$_SESSION["id"]) {

        // 未登入時顯示訊息
        echo "please login first";

        // 3 秒後跳轉至登入頁面
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

        // 建立新增佈告 SQL 指令
        $sql = "insert into bulletin(title, content, type, time)
                values(
                    '{$_POST['title']}',
                    '{$_POST['content']}',
                    {$_POST['type']},
                    '{$_POST['time']}'
                )";

        // 顯示 SQL 指令（除錯用）
        // echo $sql;

        // 執行 SQL 指令
        if (!mysqli_query($conn, $sql)) {

            // 新增失敗
            echo "新增命令錯誤";
        }
        else {

            // 新增成功
            echo "新增佈告成功，三秒鐘後回到網頁";

            // 3 秒後返回公告列表頁面
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }

?>
