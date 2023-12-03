<?php

namespace Iyuu\MovieModel;

/**
 * la_dev_crontab 计划任务表
 * @property integer $id (主键)
 * @property string $name 定时任务名称
 * @property integer $type 类型 1-定时任务
 * @property integer $system 是否系统任务 0-否 1-是
 * @property string $remark 备注
 * @property string $command 命令内容
 * @property string $params 参数
 * @property integer $status 状态 1-运行 2-停止 3-错误
 * @property string $expression 运行规则
 * @property string $error 运行失败原因
 * @property integer $last_time 最后执行时间
 * @property string $time 实时执行时长
 * @property string $max_time 最大执行时长
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaDevCrontab
{
}
