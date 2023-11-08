<?php

namespace Iyuu\MovieModel;

use think\db\exception\DataNotFoundException;
use think\db\exception\DbException;
use think\db\exception\ModelNotFoundException;
use think\Model;
use think\model\Collection;

/**
 * 每周推荐 模型
 * @property int $week_id 主键
 * @property int $subject_id 外键
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaWeek extends Model
{
    use HasSubject;

    /**
     * @var string
     */
    protected $table = 'meta_week';
    /**
     * @var string
     */
    protected $pk = 'week_id';

    /**
     * 获取最近更新
     * @param int $page
     * @param int $limit
     * @return Collection|\think\Collection
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public static function getLatest(int $page = 1, int $limit = 10): Collection|\think\Collection
    {
        return static::page($page)->limit($limit)
            ->order(['week_id' => 'desc'])
            ->select();
    }
}
