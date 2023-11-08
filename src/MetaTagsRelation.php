<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * meta_tags_relation 标签关系表
 * @property integer $id 主键(主键)
 * @property integer $tags_id 外键
 * @property integer $subject_id 外键
 * @property string $create_time 创建时间
 */
class MetaTagsRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_tags_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
