<?php

namespace Iyuu\MovieModel;

/**
 * la_admin 管理员表
 * @property integer $id (主键)
 * @property integer $root 是否超级管理员 0-否 1-是
 * @property string $name 名称
 * @property string $avatar 用户头像
 * @property string $account 账号
 * @property string $password 密码
 * @property integer $login_time 最后登录时间
 * @property string $login_ip 最后登录ip
 * @property integer $multipoint_login 是否支持多处登录：1-是；0-否；
 * @property integer $disable 是否禁用：0-否；1-是；
 * @property integer $create_time 创建时间
 * @property integer $update_time 修改时间
 * @property integer $delete_time 删除时间
 */
trait HasLaAdmin
{
}
