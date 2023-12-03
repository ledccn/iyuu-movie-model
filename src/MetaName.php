<?php

namespace Iyuu\MovieModel;

use think\db\Query;
use think\Model;

/**
 * meta_name 演员名字
 * @property integer $name_id 主键(主键)
 * @property string $name 名字
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaName extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_name';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'name_id';

    /**
     * 获取名字
     * @param int|string $name_id
     * @return string
     */
    public static function getNameText(int|string $name_id): string
    {
        if (is_string($name_id)) {
            if (empty($name_id) || !ctype_digit($name_id)) {
                return '';
            }
        }

        $model = self::findOrEmpty($name_id);
        if ($model->isEmpty()) {
            return '';
        }
        return $model->getData('name');
    }

    /**
     * 获取名字数组
     * @param array|string $ids
     * @return array
     */
    public static function getNameArray(array|string $ids): array
    {
        if (empty($ids)) {
            return [];
        }
        if (is_string($ids)) {
            $ids = explode(',', $ids);
        }
        return self::whereIn('name_id', $ids)->column('name');
    }

    /**
     * 搜索器
     * @param Query $query
     * @param string $value
     * @param array $data
     * @return void
     */
    public function searchNameAttr(Query $query, string $value, array $data): void
    {
        $query->where('name', 'like', '%' . $value . '%');
    }
}
