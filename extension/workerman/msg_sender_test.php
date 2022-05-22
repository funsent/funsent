<?php

    header('charset=utf-8');

    // 指明给谁推送，为空表示向所有在线用户推送
    $to_uid = "";
    // 推送的url地址，使用自己的服务器地址
    $push_api_url = "http://127.0.0.1:2121/";
    $post_data = array(
       "type" => "publish",
       // "content" => "这个是推送的测试数据",
       "to" => $to_uid, 
    );
    $ch = curl_init ();
    $i = 1;
echo '速报服务启动成功' . PHP_EOL;
while (true) {

    $post_data['content'] = '这个是推送的测试数据' . $i++;

    curl_setopt ( $ch, CURLOPT_URL, $push_api_url );
    curl_setopt ( $ch, CURLOPT_POST, 1 );
    curl_setopt ( $ch, CURLOPT_HEADER, 0 );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array("Expect:"));
    $return = curl_exec ( $ch );


    sleep(5);

}
    curl_close ( $ch );
   // var_export($return);