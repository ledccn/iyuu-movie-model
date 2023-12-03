<?php

namespace Iyuu\MovieModel;

/**
 * la_notice_setting 通知设置表
 * @property integer $id (主键)
 * @property integer $scene_id 场景id
 * @property string $scene_name 场景名称
 * @property string $scene_desc 场景描述
 * @property integer $recipient 接收者 1-用户 2-平台
 * @property integer $type 通知类型: 1-业务通知 2-验证码
 * @property string $system_notice 系统通知设置
 * @property string $sms_notice 短信通知设置
 * @property string $oa_notice 公众号通知设置
 * @property string $mnp_notice 小程序通知设置
 * @property mixed $support 支持的发送类型 1-系统通知 2-短信通知 3-微信模板消息 4-小程序提醒
 * @property integer $update_time 更新时间
 */
trait HasLaNoticeSetting
{
}
