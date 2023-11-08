<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * meta_celebrity_relation 条目影人关系表
 * @property integer $id id(主键)
 * @property integer $subject_id 外键
 * @property integer $celebrity_id 外键
 * @property string $create_time 创建时间
 */
class MetaCelebrityRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_celebrity_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
