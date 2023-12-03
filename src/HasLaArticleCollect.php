<?php

namespace Iyuu\MovieModel;

/**
 * la_article_collect 文章收藏表
 * @property integer $id 主键(主键)
 * @property integer $user_id 用户ID
 * @property integer $article_id 文章ID
 * @property integer $status 收藏状态 0-未收藏 1-已收藏
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaArticleCollect
{
}
