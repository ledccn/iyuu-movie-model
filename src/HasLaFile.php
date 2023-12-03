<?php

namespace Iyuu\MovieModel;

/**
 * la_file 文件表
 * @property integer $id 主键ID(主键)
 * @property integer $cid 类目ID
 * @property integer $source_id 上传者id
 * @property integer $source 来源类型[0-后台,1-用户]
 * @property integer $type 类型[10=图片, 20=视频]
 * @property string $name 文件名称
 * @property string $uri 文件路径
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaFile
{
}
