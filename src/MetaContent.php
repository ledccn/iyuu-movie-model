<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * meta_content 剧情简介
 * @property integer $id 主键(主键)
 * @property mixed $content 内容
 * @property mixed $sha1 哈希
 * @property string $create_time 创建时间
 */
class MetaContent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_content';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    /**
     * 获取内容
     * @param int|null $id
     * @return string
     */
    public static function getContent(?int $id): string
    {
        if (empty($id)) {
            return '';
        }
        $model = self::findOrEmpty($id);
        if ($model->isEmpty()) {
            return '';
        }
        return $model->content;
    }
}
