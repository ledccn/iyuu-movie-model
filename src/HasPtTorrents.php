<?php

namespace Iyuu\MovieModel;

/**
 * pt_torrents 种子表
 * @property integer $id 主键(主键)
 * @property integer $sid 站点
 * @property integer $torrent_id 种子ID
 * @property integer $group_id 分组ID
 * @property integer $category 分类
 * @property integer $medium 媒介
 * @property integer $codec 视频编码
 * @property integer $audiocodec 音频编码
 * @property integer $standard 分辨率
 * @property integer $team 制作组
 * @property integer $level 分级(观看年龄)
 * @property integer $is_subject 是条目
 * @property string $uri 统一资源标识符
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
trait HasPtTorrents
{
}
