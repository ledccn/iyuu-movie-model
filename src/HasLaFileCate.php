<?php

namespace Iyuu\MovieModel;

/**
 * la_file_cate 文件分类表
 * @property integer $id 主键ID(主键)
 * @property integer $pid 父级ID
 * @property integer $type 类型[10=图片，20=视频，30=文件]
 * @property string $name 分类名称
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaFileCate
{
}
