<?php

namespace Iyuu\MovieModel;

/**
 * la_article 文章表
 * @property integer $id 文章id(主键)
 * @property integer $cid 文章分类
 * @property string $title 文章标题
 * @property string $desc 简介
 * @property string $abstract 文章摘要
 * @property string $image 文章图片
 * @property string $author 作者
 * @property string $content 文章内容
 * @property integer $click_virtual 虚拟浏览量
 * @property integer $click_actual 实际浏览量
 * @property integer $is_show 是否显示:1-是.0-否
 * @property integer $sort 排序
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaArticle
{
}
