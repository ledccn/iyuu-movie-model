<?php

namespace Iyuu\MovieModel;

/**
 * la_sms_log 短信记录表
 * @property integer $id id(主键)
 * @property integer $scene_id 场景id
 * @property string $mobile 手机号码
 * @property string $content 发送内容
 * @property string $code 发送关键字（注册、找回密码）
 * @property integer $is_verify 是否已验证；0-否；1-是
 * @property integer $check_num 验证次数
 * @property integer $send_status 发送状态：0-发送中；1-发送成功；2-发送失败
 * @property integer $send_time 发送时间
 * @property string $results 短信结果
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaSmsLog
{
}
