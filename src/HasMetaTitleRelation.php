<?php

namespace Iyuu\MovieModel;

/**
 * meta_title_relation 影视标题关系表
 * @property integer $id 主键(主键)
 * @property integer $title_id 外键
 * @property integer $subject_id 外键
 * @property string $create_time 创建时间
 */
trait HasMetaTitleRelation
{
}
