<?php

return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'aliyun',
        ],
    ],

    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => storage_path('logs/easy-sms.log'),
        ],
        'aliyun' => [
            'access_key_id' => env('ALIYUN_ACCESS_KEY_ID', ''),
            'access_key_secret' => env('ALIYUN_ACCESS_KEY_SECRET', ''),
            'sign_name' => env('ALIYUN_SIGN_NAME', ''),
        ],
        'aliyunrest' => [
            'app_key' => env('ALIYUNREST_APP_KEY', ''),
            'app_secret_key' => env('ALIYUNREST_APP_SECRET_KEY', ''),
            'sign_name' => env('ALIYUNREST_SIGN_NAME', ''),
        ],
        'yunpian' => [
            'api_key' => env('YUNPIAN_API_KEY', ''),
            'signature' => env('YUNPIAN_SIGNATURE', ''), // 内容中无签名时使用
        ],
        'submail' => [
            'app_id' => env('SUBMAIL_APP_ID', ''),
            'app_key' => env('SUBMAIL_APP_KEY', ''),
            'project' => env('SUBMAIL_PROJECT', ''), // 默认 project，可在发送时 data 中指定
        ],
        'luosimao' => [
            'api_key' => env('LUOSIMAO_API_KEY', ''),
        ],
        'yuntongxun' => [
            'app_id' => env('YUNTONGXUN_API_ID', ''),
            'account_sid' => env('YUNTONGXUN_ACCOUNT)_SID', ''),
            'account_token' => env('YUNTONGXUN_ACCOUNT_TOKEN', ''),
            'is_sub_account' => env('YUNTONGXUN_IS_SUB_ACCOUNT', false),
        ],
        'huyi' => [
            'api_id' => '',
            'api_key' => '',
            'signature' => '',
        ],
        'juhe' => [
            'app_key' => '',
        ],
        'sendcloud' => [
            'sms_user' => '',
            'sms_key' => '',
            'timestamp' => false, // 是否启用时间戳
        ],
        'baidu' => [
            'ak' => '',
            'sk' => '',
            'invoke_id' => '',
            'domain' => '',
        ],
        'huaxin' => [
            'user_id'  => '',
            'password' => '',
            'account'  => '',
            'ip'       => '',
            'ext_no'   => '',
        ],
        'chuanglan' => [
            'account' => '',
            'password' => '',

            // 国际短信时必填
            'intel_account' => '',
            'intel_password' => '',

            // \Overtrue\EasySms\Gateways\ChuanglanGateway::CHANNEL_VALIDATE_CODE  => 验证码通道（默认）
            // \Overtrue\EasySms\Gateways\ChuanglanGateway::CHANNEL_PROMOTION_CODE => 会员营销通道
            'channel'  => \Overtrue\EasySms\Gateways\ChuanglanGateway::CHANNEL_VALIDATE_CODE,

            // 会员营销通道 特定参数。创蓝规定：api提交营销短信的时候，需要自己加短信的签名及退订信息
            'sign' => '【通讯云】',
            'unsubscribe' => '回TD退订',
        ],
        'rongcloud' => [
            'app_key' => '',
            'app_secret' => '',
        ],
        'tianyiwuxian' => [
            'username' => '', //用户名
            'password' => '', //密码
            'gwid' => '', //网关ID
        ],
        'twilio' => [
            'account_sid' => '', // sid
            'from' => '', // 发送的号码 可以在控制台购买
            'token' => '', // apitoken
        ],
        'tiniyo' => [
            'account_sid' => '', // auth_id from https://tiniyo.com
            'from' => '', // 发送的号码 可以在控制台购买
            'token' => '', // auth_secret from https://tiniyo.com
        ],
        'qcloud' => [
            'sdk_app_id' => '', // SDK APP ID
            'app_key' => '', // APP KEY
            'sign_name' => '', // 短信签名，如果使用默认签名，该字段可缺省（对应官方文档中的sign）
        ],
        'avatardata' => [
            'app_key' => '', // APP KEY
        ],
        'huawei' => [
            'endpoint' => '', // APP接入地址
            'app_key' => '', // APP KEY
            'app_secret' => '', // APP SECRET
            'from' => [
                'default' => '1069012345', // 默认使用签名通道号
                'custom' => 'csms12345', // 其他签名通道号 可以在 data 中定义 from 来指定
                'abc' => 'csms67890', // 其他签名通道号
            ],
            'callback' => '' // 短信状态回调地址
        ],
        'yunxin' => [
            'app_key' => '',
            'app_secret' => '',
            'code_length' => 4, // 随机验证码长度，范围 4～10，默认为 4
            'need_up' => false, // 是否需要支持短信上行
        ],
        'yunzhixun' => [
            'sid' => '',
            'token' => '',
            'app_id' => '',
        ],
        'kingtto' => [
            'userid' => '',
            'account' => '',
            'password' => '',
        ],
        'qiniu' => [
            'secret_key' => '',
            'access_key' => '',
        ],
        'ucloud' => [
            'private_key' => '',    //私钥
            'public_key' => '',    //公钥
            'sig_content' => '',    // 短信签名,
            'project_id' => '',    //项目ID,子账号才需要该参数
        ],
        'smsbao' => [
            'user' => '',    //账号
            'password' => ''   //密码
        ],
    ],
];