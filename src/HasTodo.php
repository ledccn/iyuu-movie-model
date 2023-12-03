<?php

namespace Iyuu\MovieModel;

/**
 * todo 代办事项
 * @property integer $id 主键(主键)
 * @property integer $parent_id 父ID
 * @property string $title 任务标题
 * @property string $description 任务描述
 * @property string $start_time 开始时间
 * @property string $end_time 结束时间
 * @property integer $completed 完成状态
 * @property integer $admin_id 创建者ID
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
trait HasTodo
{
}
