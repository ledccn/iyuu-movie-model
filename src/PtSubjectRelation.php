<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * pt_subject_relation 种子条目关系
 * @property integer $id 主键(主键)
 * @property integer $subject_id 条目PK
 * @property integer $pt_tid 种子PK
 * @property string $create_time 创建时间
 */
class PtSubjectRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pt_subject_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
