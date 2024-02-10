<?php

return[
    'backups' => '备份',
    'manage-backups' => '管理备份',
    'create-backup' => '创建备份',
    'have-been-allocated' => '已为这个服务器创建了 {{current}} 个备份，最多能创建 {{max}} 个。',

    'name' => '名称',
    'size' => '大小',
    'creation-date' => '创建日期',
    'checksum' => '校验码',

    'failed' => '已失败',
    'continue' => '继续',

    'download' => '下载',
    'restore' => '恢复',
    'lock' => '锁定',
    'unlock' => '解锁',
    'delete' => '删除',

    'limit-is-0' => '此服务器被设置为不能创建任何备份。',
    'try-going-back' => '看起来已经没有可以列出的备份了，试着往回翻一页。',
    'no-backups' => '此服务器目前似乎没有任何备份。',
    'no-longer-protected' => '该备份将不再受到删除保护。',
    'your-server-will-be-stopped' => '此服务器将停止运行。在完成之前，您将无法控制电源状态、访问文件管理器或创建其他备份。',
    'delete-all-files' => '恢复备份前删除所有文件。',
    'permanent-operation' => '这是一项永久性操作。备份一旦删除将无法恢复。',

    'create' => [
        'title' => '创建服务器备份',
        'backup-name' => '备份名称',
        'backup-name-description' => '用于引用此备份的名称。',
        'ignored-files-directories' => '忽略的文件和目录',
        'ignored-files-directories-description' => '输入生成备份时要忽略的文件或文件夹。留空表示使用服务器根目录中的 .pteroignore 文件内容（如果存在）。除了通过在路径前加上感叹号来否定规则外，还支持文件和文件夹的通配符匹配。',
        'locked' => '锁定',
        'locked-description' => '除非手动解锁，否则该备份无法被删除。',
        'start' => '开始备份',
    ]
];