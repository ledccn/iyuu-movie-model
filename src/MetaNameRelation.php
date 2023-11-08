<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * meta_name_relation 演员名字关系
 * @property integer $id 主键(主键)
 * @property integer $name_id 外建
 * @property integer $celebrity_id 外建
 * @property string $create_time 创建时间
 */
class MetaNameRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_name_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
