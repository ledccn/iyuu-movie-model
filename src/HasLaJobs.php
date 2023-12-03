<?php

namespace Iyuu\MovieModel;

/**
 * la_jobs 岗位表
 * @property integer $id id(主键)
 * @property string $name 岗位名称
 * @property string $code 岗位编码
 * @property integer $sort 显示顺序
 * @property integer $status 状态（0停用 1正常）
 * @property string $remark 备注
 * @property integer $create_time 创建时间
 * @property integer $update_time 修改时间
 * @property integer $delete_time 删除时间
 */
trait HasLaJobs
{
}
