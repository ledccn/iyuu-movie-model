<?php

namespace Iyuu\MovieModel;

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
trait HasMetaSubject
{
}
