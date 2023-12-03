<?php

namespace Iyuu\MovieModel;

/**
 * la_notice_record 通知记录表
 * @property integer $id ID(主键)
 * @property integer $user_id 用户id
 * @property string $title 标题
 * @property string $content 内容
 * @property integer $scene_id 场景
 * @property integer $read 已读状态;0-未读,1-已读
 * @property integer $recipient 通知接收对象类型;1-会员;2-商家;3-平台;4-游客(未注册用户)
 * @property integer $send_type 通知发送类型 1-系统通知 2-短信通知 3-微信模板 4-微信小程序
 * @property integer $notice_type 通知类型 1-业务通知 2-验证码
 * @property string $extra 其他
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaNoticeRecord
{
}
