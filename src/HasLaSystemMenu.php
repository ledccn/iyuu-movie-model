<?php

namespace Iyuu\MovieModel;

/**
 * la_system_menu 系统菜单表
 * @property integer $id 主键(主键)
 * @property integer $pid 上级菜单
 * @property mixed $type 权限类型: M=目录，C=菜单，A=按钮
 * @property string $name 菜单名称
 * @property string $icon 菜单图标
 * @property integer $sort 菜单排序
 * @property string $perms 权限标识
 * @property string $paths 路由地址
 * @property string $component 前端组件
 * @property string $selected 选中路径
 * @property string $params 路由参数
 * @property integer $is_cache 是否缓存: 0=否, 1=是
 * @property integer $is_show 是否显示: 0=否, 1=是
 * @property integer $is_disable 是否禁用: 0=否, 1=是
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
trait HasLaSystemMenu
{
}
