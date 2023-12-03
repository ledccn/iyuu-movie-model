<?php

namespace Iyuu\MovieModel;

/**
 * la_user_auth 用户授权表
 * @property integer $id (主键)
 * @property integer $user_id 用户id
 * @property string $openid 微信openid
 * @property string $unionid 微信unionid
 * @property integer $terminal 客户端类型：1-微信小程序；2-微信公众号；3-手机H5；4-电脑PC；5-苹果APP；6-安卓APP
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
trait HasLaUserAuth
{
}
