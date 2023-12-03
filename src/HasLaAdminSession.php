<?php

namespace Iyuu\MovieModel;

/**
 * la_admin_session 管理员会话表
 * @property integer $id (主键)
 * @property integer $admin_id 用户id
 * @property integer $terminal 客户端类型：1-pc管理后台 2-mobile手机管理后台
 * @property string $token 令牌
 * @property integer $update_time 更新时间
 * @property integer $expire_time 到期时间
 */
trait HasLaAdminSession
{
}
