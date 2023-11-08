<?php

namespace Iyuu\MovieModel;

use think\db\exception\DataNotFoundException;
use think\db\exception\DbException;
use think\db\exception\ModelNotFoundException;
use think\Model;

/**
 * meta_languages 语言
 * @property integer $lang_id 语言ID(主键)
 * @property string $value 语言值
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaLanguages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_languages';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'lang_id';

    /**
     * 获取语言数组
     * @param array|string $ids
     * @return array
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public static function getLanguages(array|string $ids): array
    {
        if (empty($ids)) {
            return [];
        }
        if (is_string($ids)) {
            $ids = explode(',', $ids);
        }
        return self::whereIn('lang_id', $ids)->field(['lang_id', 'value'])->select()->toArray();
    }
}
