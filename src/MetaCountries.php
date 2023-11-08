<?php

namespace Iyuu\MovieModel;

use think\db\exception\DataNotFoundException;
use think\db\exception\DbException;
use think\db\exception\ModelNotFoundException;
use think\Model;

/**
 * meta_countries 国家或地区
 * @property integer $countries_id 国家ID(主键)
 * @property string $value 值
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaCountries extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_countries';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'countries_id';

    /**
     * 获取语言数组
     * @param array|string $ids
     * @return array
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public static function getCountries(array|string $ids): array
    {
        if (empty($ids)) {
            return [];
        }
        if (is_string($ids)) {
            $ids = explode(',', $ids);
        }
        return self::whereIn('countries_id', $ids)->field(['countries_id', 'value'])->select()->toArray();
    }
}
