<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * meta_tags 影视标签
 * @property integer $tags_id 标签ID(主键)
 * @property string $value 值
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaTags extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_tags';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'tags_id';


}
