<?php

namespace Iyuu\MovieModel;

/**
 * la_generate_table 代码生成表信息表
 * @property integer $id id(主键)
 * @property string $table_name 表名称
 * @property string $table_comment 表描述
 * @property integer $template_type 模板类型 0-单表(curd) 1-树表(curd)
 * @property string $author 作者
 * @property string $remark 备注
 * @property integer $generate_type 生成方式  0-压缩包下载 1-生成到模块
 * @property string $module_name 模块名
 * @property string $class_dir 类目录名
 * @property string $class_comment 类描述
 * @property integer $admin_id 管理员id
 * @property string $menu 菜单配置
 * @property string $delete 删除配置
 * @property string $tree 树表配置
 * @property string $relations 关联配置
 * @property integer $create_time 创建时间
 * @property integer $update_time 修改时间
 */
trait HasLaGenerateTable
{
}
