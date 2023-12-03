<?php

namespace Iyuu\MovieModel;

use think\db\Query;
use think\Model;

/**
 * meta_title 影视标题
 * @property integer $title_id 名称ID(主键)
 * @property string $title 影片名
 * @property mixed $sha1 散列
 * @property string $create_time 创建时间
 */
class MetaTitle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_title';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'title_id';

    /**
     * 获取标题
     * @param int|string $title_id
     * @return string
     */
    public static function getTitle(int|string $title_id): string
    {
        if (is_string($title_id)) {
            if (empty($title_id) || !ctype_digit($title_id)) {
                return '';
            }
        }

        $model = self::findOrEmpty($title_id);
        if ($model->isEmpty()) {
            return '';
        }
        return $model->title;
    }

    /**
     * 获取标题数组
     * @param array|string $ids
     * @return array
     */
    public static function getTitleArray(array|string $ids): array
    {
        if (empty($ids)) {
            return [];
        }
        if (is_string($ids)) {
            $ids = explode(',', $ids);
        }
        return self::whereIn('title_id', $ids)->column('title');
    }

    /**
     * 搜索器
     * @param Query $query
     * @param string $value
     * @param array $data
     * @return void
     */
    public function searchTitleAttr(Query $query, string $value, array $data): void
    {
        $query->where('title', 'like', '%' . $value . '%');
    }
}
