<?php

namespace Iyuu\MovieModel;

/**
 * meta_celebrity 名人表
 * @property integer $celebrity_id 主键(主键)
 * @property integer $sites_id 电影站点主键
 * @property integer $name_sn 第三方影人id
 * @property string $imdb_nm IMDB编号
 * @property string $name 外键：中文名
 * @property string $name_en 外键：英文名
 * @property string $aka 外键：更多中文名
 * @property string $aka_en 外键：更多英文名
 * @property integer $gender 性别：1男,2女
 * @property string $alt 条目页URL
 * @property string $avatars 影人头像
 * @property mixed $works 影人作品
 * @property integer $summary 外键：简介
 * @property string $birthday 出生日期
 * @property string $born_place 出生地
 * @property mixed $photos 影人剧照
 * @property string $website 官方网站
 * @property integer $state 状态
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
trait HasMetaCelebrity
{
}
