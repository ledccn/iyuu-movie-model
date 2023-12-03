<?php

namespace Iyuu\MovieModel;

/**
 * meta_genres_relation 流派关系表
 * @property integer $id 主键(主键)
 * @property integer $genres_id 外键
 * @property integer $subject_id 外键
 * @property string $create_time 创建时间
 */
trait HasMetaGenresRelation
{
}
