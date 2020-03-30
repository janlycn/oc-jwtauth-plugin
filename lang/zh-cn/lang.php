<?php

return [
    'plugin' => [
        'name' => 'JWT 认证',
        'description' => 'JSON网络令牌认证。',
    ],
    'permissions' => [
        'settings' => '管理 JWT 认证',
    ],
    'settings' => [
        'menu_label' => 'JWT 认证',
        'menu_description' => '配置 JWT 认证',
        'tabs' => [
            'urls' => '链接设置',
            'extras' => '授权设置'
        ],
        'fields' => [
            'secret' => [
                'label' => 'JWT 秘钥',
                'comment' => "它用于生成您的令牌。仅用于 HS256、HS384 和 HS512 算法。"
            ],
            'keys_public' => [
                'label' => '公钥',
                'comment' => '公钥的路径或资源。'
            ],
            'keys_private' => [
                'label' => '私钥',
                'comment' => '私钥的路径或资源。'
            ],
            'keys_passphrase' => [
                'label' => '密码',
                'comment' => '您的私钥密码。'
            ],
            'ttl' => [
                'label' => '生存时间',
                'comment' => '指定令牌有效的时间长度(以分钟为单位)。'
            ],
            'refresh_ttl' => [
                'label' => '刷新生存时间',
                'comment' => '指定令牌可以刷新的时间长度(以分钟为单位)。'
            ],
            'algo' => [
                'label' => '哈希算法',
                'comment' => '指定将用于标记令牌的哈希算法。'
            ],
            'required_claims' => [
                'label' => '必须声明',
                'comment' => '指定必须存在于任何令牌中的声明。'
            ],
            'persistent_claims' => [
                'label' => '持续声明',
                'comment' => '指定在刷新令牌时要保留的声明密钥。'
            ],
            'lock_subject' => [
                'label' => '锁定主题',
                'comment' => '这将决定是否自动向令牌添加“prv”声明'
            ],
            'leeway' => [
                'label' => '可容许的误差',
                'comment' => '这个属性为 jwt 时间戳声明提供了一些“余地”。'
            ],
            'blacklist_enabled' => [
                'label' => '启用黑名单',
                'comment' => '为了使令牌无效，您必须启用黑名单。'
            ],
            'blacklist_grace_period' => [
                'label' => '黑名单缓冲期',
                'comment' => '以秒为单位设置缓冲期，以防止并行请求失败。'
            ],
            'decrypt_cookies' => [
                'label' => '加密 cookies',
                'comment' => '如果想解密 cookie，请禁用'
            ],
            'help_urls' => [
                'title' => '首先阅读它！',
                'content' => "
                    <p>配置这些网址有两种方法，这取决于你的应用程序结构。</p>

                    <p>相同域名：在这种情况下，你只需要相对 URI，系统会认为 BaseURL 与您的系统相同。</p>
                    
                    <p>外部域名：如果您的系统客户和前端应用程序托管在不同的域中，您需要指定完整的网址。</p>
                    
                    <p>同样重要的是要记住，两个网址必须有参数 <strong>{code}</strong>，这将自动被替换为“激活码”或“重置代码”。</p>
                "
            ],
            'activation_url' => [
                'label' => '帐户激活',
                'comment' => ''
            ],
            'reset_password_url' => [
                'label' => '密码重置',
                'comment' => ''
            ]
        ]
    ]
];
