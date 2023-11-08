<?php

namespace Iyuu\MovieModel;

use think\db\exception\DataNotFoundException;
use think\db\exception\DbException;
use think\db\exception\ModelNotFoundException;
use think\Model;

/**
 * meta_genres 流派
 * @property integer $genres_id 流派ID(主键)
 * @property string $value 流派值
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaGenres extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_genres';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'genres_id';

    /**
     * 获取流派数组
     * @param array|string $ids
     * @return array
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public static function getGenres(array|string $ids): array
    {
        if (empty($ids)) {
            return [];
        }
        if (is_string($ids)) {
            $ids = explode(',', $ids);
        }
        return self::whereIn('genres_id', $ids)->field(['genres_id', 'value'])->select()->toArray();
    }
}
