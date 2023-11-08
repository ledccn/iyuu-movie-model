<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * meta_title_relation 影视标题关系表
 * @property integer $id 主键(主键)
 * @property integer $title_id 外键
 * @property integer $subject_id 外键
 * @property string $create_time 创建时间
 */
class MetaTitleRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_title_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
