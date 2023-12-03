<?php

namespace Iyuu\MovieModel;

/**
 * la_operation_log 系统日志表
 * @property integer $id (主键)
 * @property integer $admin_id 管理员ID
 * @property string $admin_name 管理员名称
 * @property string $account 管理员账号
 * @property string $action 操作名称
 * @property string $type 请求方式
 * @property string $url 访问链接
 * @property string $params 请求数据
 * @property string $result 请求结果
 * @property string $ip ip地址
 * @property integer $create_time 创建时间
 */
trait HasLaOperationLog
{
}
