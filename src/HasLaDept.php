<?php

namespace Iyuu\MovieModel;

/**
 * la_dept 部门表
 * @property integer $id id(主键)
 * @property string $name 部门名称
 * @property integer $pid 上级部门id
 * @property integer $sort 排序
 * @property string $leader 负责人
 * @property string $mobile 联系电话
 * @property integer $status 部门状态（0停用 1正常）
 * @property integer $create_time 创建时间
 * @property integer $update_time 修改时间
 * @property integer $delete_time 删除时间
 */
trait HasLaDept
{
}
