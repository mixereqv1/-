<?php

    $hn = "172.16.131.125";
    $un = "02_ral";
    $pw = "matiozo1w";
    $db = "02_ral";

    $conn = new mysqli($hn, $un, $pw, $db);

    $sql = "SELECT * FROM pracownicy WHERE id_pracownicy<10";

    $result = mysqli_query($conn, $sql);

    $myArr = [];

    while($row = mysqli_fetch_assoc($result)){

        $myArr[] = $row['imie'];

    }

    $myJSON = json_encode($myArr);
    echo $myJSON;

?>