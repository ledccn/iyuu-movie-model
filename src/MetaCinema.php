<?php

namespace Iyuu\MovieModel;

use think\db\exception\DataNotFoundException;
use think\db\exception\DbException;
use think\db\exception\ModelNotFoundException;
use think\Model;
use think\model\Collection;

/**
 * 院线热映
 * @property int $cinema_id 主键
 * @property int $subject_id 外键
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaCinema extends Model
{
    use HasSubject;

    /**
     * @var string
     */
    protected $table = 'meta_cinema';
    /**
     * @var string
     */
    protected $pk = 'cinema_id';

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
            ->order(['cinema_id' => 'desc'])
            ->select();
    }
}
