<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * meta_subject_attent 追剧表
 * @property integer $id 主键(主键)
 * @property integer $user_id 用户ID
 * @property integer $subject_id 条目ID
 * @property integer $status 状态:0取消,1追
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class MetaSubjectAttent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_subject_attent';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
