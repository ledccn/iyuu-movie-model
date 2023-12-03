<?php

namespace Iyuu\MovieModel;

/**
 * la_user_session 用户会话表
 * @property integer $id (主键)
 * @property integer $user_id 用户id
 * @property integer $terminal 客户端类型：1-微信小程序；2-微信公众号；3-手机H5；4-电脑PC；5-苹果APP；6-安卓APP
 * @property string $token 令牌
 * @property integer $update_time 更新时间
 * @property integer $expire_time 到期时间
 */
trait HasLaUserSession
{
}
