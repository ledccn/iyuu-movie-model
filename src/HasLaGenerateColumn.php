<?php

namespace Iyuu\MovieModel;

/**
 * la_generate_column 代码生成表字段信息表
 * @property integer $id id(主键)
 * @property integer $table_id 表id
 * @property string $column_name 字段名称
 * @property string $column_comment 字段描述
 * @property string $column_type 字段类型
 * @property integer $is_required 是否必填 0-非必填 1-必填
 * @property integer $is_pk 是否为主键 0-不是 1-是
 * @property integer $is_insert 是否为插入字段 0-不是 1-是
 * @property integer $is_update 是否为更新字段 0-不是 1-是
 * @property integer $is_lists 是否为列表字段 0-不是 1-是
 * @property integer $is_query 是否为查询字段 0-不是 1-是
 * @property string $query_type 查询类型
 * @property string $view_type 显示类型
 * @property string $dict_type 字典类型
 * @property integer $create_time 创建时间
 * @property integer $update_time 修改时间
 */
trait HasLaGenerateColumn
{
}
