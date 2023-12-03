<?php

namespace Iyuu\MovieModel;

/**
 * la_user_account_log 
 * @property integer $id (主键)
 * @property string $sn 流水号
 * @property integer $user_id 用户id
 * @property integer $change_object 变动对象
 * @property integer $change_type 变动类型
 * @property integer $action 动作 1-增加 2-减少
 * @property string $change_amount 变动数量
 * @property string $left_amount 变动后数量
 * @property string $source_sn 关联单号
 * @property string $remark 备注
 * @property string $extra 预留扩展字段
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaUserAccountLog
{
}
