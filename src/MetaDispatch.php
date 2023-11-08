<?php

namespace Iyuu\MovieModel;

use think\Model;

/**
 * meta_dispatch 任务调度
 * @property integer $id ID(主键)
 * @property integer $type 主类型
 * @property integer $subtype 子类型
 * @property integer $unique_id 唯一标识
 * @property string $payload 有效载荷
 * @property integer $state 状态
 * @property integer $dispatch_time 调度时间
 * @property string $message 错误描述
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class MetaDispatch extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meta_dispatch';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
