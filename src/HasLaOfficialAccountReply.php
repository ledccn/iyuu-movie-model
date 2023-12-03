<?php

namespace Iyuu\MovieModel;

/**
 * la_official_account_reply 公众号消息回调表
 * @property integer $id (主键)
 * @property string $name 规则名称
 * @property string $keyword 关键词
 * @property integer $reply_type 回复类型 1-关注回复 2-关键字回复 3-默认回复
 * @property integer $matching_type 匹配方式：1-全匹配；2-模糊匹配
 * @property integer $content_type 内容类型：1-文本
 * @property string $content 回复内容
 * @property integer $status 启动状态：1-启动；0-关闭
 * @property integer $sort 排序
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaOfficialAccountReply
{
}
