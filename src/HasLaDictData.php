<?php

namespace Iyuu\MovieModel;

/**
 * la_dict_data 字典数据表
 * @property integer $id id(主键)
 * @property string $name 数据名称
 * @property string $value 数据值
 * @property integer $type_id 字典类型id
 * @property string $type_value 字典类型
 * @property integer $sort 排序值
 * @property integer $status 状态 0-停用 1-正常
 * @property string $remark 备注
 * @property integer $create_time 创建时间
 * @property integer $update_time 修改时间
 * @property integer $delete_time 删除时间
 */
trait HasLaDictData
{
}
