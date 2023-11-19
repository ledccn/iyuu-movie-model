<?php

namespace Iyuu\MovieModel;

use think\db\Query;
use think\Model;

/**
 * 追剧表
 * @property integer $id 主键(主键)
 * @property integer $user_id 用户ID
 * @property integer $subject_id 条目ID
 * @property integer $status 状态:0取消,1追
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class MetaSubjectAttent extends Model
{
    use HasSubject;

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

    /**
     * 数据库约束：联合唯一
     * @param int $user_id
     * @param int $subject_id
     * @return array
     */
    public static function uniqueWhere(int $user_id, int $subject_id): array
    {
        return [
            'user_id' => $user_id,
            'subject_id' => $subject_id
        ];
    }

    /**
     * 联合唯一查询
     * @param int $user_id
     * @param int $subject_id
     * @return static|Query
     */
    public static function uniqueQuery(int $user_id, int $subject_id): static|Query
    {
        return static::where(self::uniqueWhere($user_id, $subject_id));
    }
}
