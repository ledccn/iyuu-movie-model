<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * pt_title PT主标题
 * @property integer $title_id 主键(主键)
 * @property mixed $sha1 散列
 * @property string $title 主标题
 * @property string $create_time 创建时间
 */
class PtTitle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pt_title';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'title_id';

    
}
