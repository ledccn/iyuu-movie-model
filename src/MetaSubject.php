<?php

namespace Iyuu\MovieModel;

use think\Collection;
use think\db\exception\DataNotFoundException;
use think\db\exception\DbException;
use think\db\exception\ModelNotFoundException;
use think\Model;

/**
 * meta_subject 影视条目
 * @property integer $id 主键(主键)
 * @property integer $sites_id 电影站点主键
 * @property integer $subject_sn 第三方影片ID
 * @property string $imdb IMDb编号
 * @property string $title 外键：中文名
 * @property string $original_title 外键：原名
 * @property string $aka 外键：又名
 * @property integer $year 年代
 * @property string $alt 条目页URL
 * @property string $rating_value 评分
 * @property integer $rating_count 评分人数
 * @property string $images 海报图
 * @property string $subtype 条目分类
 * @property string $directors 外键：导演
 * @property string $writers 外键：编剧
 * @property string $casts 外键：主演
 * @property string $tags 外键：标签
 * @property string $languages 外键：语言
 * @property string $genres 外键：影片类型
 * @property string $countries 外键：制片国家/地区areas
 * @property mixed $pubdates 上映首映日期
 * @property string $mainland_pubdate 大陆上映日期
 * @property integer $summary 外键：简介
 * @property integer $seasons_count 总季数
 * @property integer $current_season 当前季数
 * @property integer $episodes_count 当前季的集数
 * @property integer $state 状态
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaSubject extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_subject';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    /**
     * 场景
     * @var array
     */
    protected $scene = [
        'api_detail' => [
            'hidden' => ['create_time', 'update_time']
        ],
    ];

    /**
     * Api列表的查询字段
     */
    const ApiListsFiled = ['id', 'sites_id', 'subject_sn', 'imdb', 'title', 'original_title', 'year', 'alt', 'rating_value', 'rating_count', 'images', 'subtype', 'seasons_count', 'current_season', 'episodes_count', 'state'];

    /**
     * 【获取器】标题
     * @param $value
     * @return string
     */
    public function getTitleAttr($value): string
    {
        return MetaTitle::getTitle($value);
    }

    /**
     * 【获取器】原名
     * @param string $value
     * @return string
     */
    public function getOriginalTitleAttr(string $value): string
    {
        return MetaTitle::getTitle($value);
    }

    /**
     * 【获取器】又名
     * @param string $value
     * @return array
     */
    public function getAkaAttr(string $value): array
    {
        return MetaTitle::getTitleArray($value);
    }

    /**
     * 查询后，动态获取器
     * @param MetaSubject $model
     * @return self
     */
    public static function hasWithAttr(self $model): self
    {
        $model->withAttr('summary', function ($value, $data) {
            return MetaContent::getContent($value);
        })->withAttr('directors', function ($value, $data) {
            return MetaCelebrity::getCelebrity($value);
        })->withAttr('writers', function ($value, $data) {
            return MetaCelebrity::getCelebrity($value);
        })->withAttr('casts', function ($value, $data) {
            return MetaCelebrity::getCelebrity($value);
        })->withAttr('languages', function ($v, $data) {
            return MetaLanguages::getLanguages($v);
        })->withAttr('genres', function ($v, $data) {
            return MetaGenres::getGenres($v);
        })->withAttr('countries', function ($v, $data) {
            return MetaCountries::getCountries($v);
        });
        return $model;
    }

    /**
     * 获取列表
     * @param array|string $ids
     * @return Collection
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public static function getLists(array|string $ids): Collection
    {
        if (empty($ids)) {
            throw new DataNotFoundException('ids不允许为空');
        }
        if (is_string($ids)) {
            $ids = explode(',', $ids);
        }
        return MetaSubject::where('id', 'in', $ids)
            ->field(MetaSubject::ApiListsFiled)
            ->order(['id' => 'desc'])
            ->select();
    }

    /**
     * 获取最近更新
     * @param string $subtype
     * @param int $page
     * @param int $limit
     * @return Collection
     * @throws DataNotFoundException
     * @throws DbException
     * @throws ModelNotFoundException
     */
    public static function getLatest(string $subtype, int $page = 1, int $limit = 10): Collection
    {
        return MetaSubject::where('subtype', '=', $subtype)
            ->field(MetaSubject::ApiListsFiled)
            ->page($page)->limit($limit)
            ->order(['id' => 'desc'])
            ->select();
    }
}
