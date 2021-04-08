<?php

    // echo "Hello 小刁"

    $data = [
        "name"=>"zhangsan",
        "age"=>10,
        "email"=>"ager@qq.com"
    ];

    //将 数组转为Json字符串
    echo json_encode($data)

?>