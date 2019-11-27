<?php
    //使用七牛进行文件上传
    include_once 'config.php';

    include_once 'autoload.php';
    //鉴权类
    use Qiniu\Auth;
    //文件上传类
    use Qiniu\Storage\UploadManager;
    use Qiniu\Config;
    // 用于签名的公钥和私钥
    $accessKey = constant('AK');
    $secretKey = constant('SK');

    $auth = new Auth($accessKey, $secretKey);
    $bucket = constant('BUCKET');

    $res = [];
    $res["code"] = 200; //七牛云token
    $res["up_token"] = $auth->uploadToken($bucket); //七牛云token
    $res["domain"] = constant("DOMAIN");
    echo json_encode($res);

