<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * PT副标题
 * @property integer $subtitle_id 主键(主键)
 * @property mixed $sha1 散列
 * @property string $subtitle 副标题
 * @property string $create_time 创建时间
 */
class PtSubtitle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pt_subtitle';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'subtitle_id';
}
