<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * pt_title PT主标题
 * @property integer $id 主键(主键)
 * @property integer $pt_tid 种子PK
 * @property integer $level 分级
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
    protected $pk = 'id';
}
