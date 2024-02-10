<?php

return [
    'account-overview' => '账号概览',
    'twofactor-messagebox' => '您的账户必须启用双因素验证才能继续。',
    'apikey' => 'API 凭证',
    'sshkey' => 'SSH 密钥',

    'update-password' => [
        'current' => '当前密码',
        'new' => '新密码',
        'requirements' => '您的新密码长度至少应为 8 个字符，并且是没有在其他站点使用过的。',
        'confirm' => '确认新密码',
        'update' => '更新密码',
    ],

    'update-email' => [
        'isUpdated' => '您的首选电子邮箱地址已更新',
        'update' => '更新邮箱地址',
        'email' => '邮箱地址',
        'confirm' => '确认密码',
    ],

    'appearance' => [
        'title' => '外观',
        'lightDarkMode' => '亮 / 暗色模式',
        'light' => '亮色模式',
        'dark' => '暗色模式',
        'language' => '面板语言',
        'panel-sounds' => '面板音效',
        'on' => '开',
        'off' => '关',
    ],

    'twofactor' => [
        'title' => '双因素验证',
        'isEnabled' => '您的账户已启用双因素验证。',
        'isDisabled' => '您的账户目前尚未启用双因素验证。请单击下面的按钮开始配置。',
        'disable' => '关闭双因素验证',
        'enable' => '开启双因素验证',
        
        'disable-dialog' => [
            'password' => '密码',
            'cancel' => '取消',
            'must-enter-password' => '您必须输入账户密码才能继续。',
            'disable' => '关闭',
        ],

        'setup-dialog' => [
            'description' => '使用您选择的双因素验证应用程序扫描上面的二维码。然后，将生成的 6 位数字代码输入下面的字段。',
            'account-password' => '账户密码',
            'qrcode-loading' => '等待二维码加载...',
            'enter-6digit-password' => '您必须输入生成的 6 位数字代码和账户密码才能继续。',
            'enable' => '开启',
            'cancel' => '取消',
        ],
    ],

    'apiKey' => [
        'label' => '描述',
        'description' => '这个 API 凭证的描述。',
        'allowedIPs-label' => 'IP 白名单',
        'allowedIPs-description' => '留空表示允许任何 IP 地址使用此 API 凭证，否则请在新行中提供每个 IP 地址。',
        'createButton' => '创建',

        'your-keys' => '你的 API 凭证',
        'store-save' => '您申请的 API 凭证如下所示。请将其存放在安全的地方，这个凭证将不会显示第二次。',
        'close' => '关闭',

        'delete-api-key' => '删除 API 凭证',
        'delete-key' => '删除凭证',
        'all-requests-invalidated-1' => '所有使用凭证',
        'all-requests-invalidated-2' => '请求都将失效。',
        'loading' => '加载中...',
        'no-key-found' => '此账户下没有 API 凭证。',
        'last-used' => '最后使用于',
    ],

    'sshKey' => [
        'loading' => '加载中...',
        'no-key-found' => '此账户下没有 SSH 密钥。',
        'added-on' => '添加于',

        'createForm' => [
            'key-name' => 'SSH 密钥名称',
            'public-key' => '公钥',
            'public-key-desc' => '输入你的 SSH 公钥',
            'save' => '保存',
        ],

        'deleteForm' => [
            'delete-ssh-key' => '删除 SSH 密钥',
            'delete-key' => '删除密钥',
            'will-invalidate-1' => '删除 SSH 密钥',
            'will-invalidate-2' => '将使其在整个面板中的使用无效。',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => '双因素验证已开启',
        'description' => '将下面的备用代码存储在安全的地方。如果您无法使用验证设备，则可以使用这些代码登录。',
        'alert' => '这些代码将不会显示第二次。',
        'doneButton' => '完成',
    ],
];