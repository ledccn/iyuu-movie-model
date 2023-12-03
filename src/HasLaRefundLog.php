<?php

namespace Iyuu\MovieModel;

/**
 * la_refund_log 
 * @property integer $id id(主键)
 * @property string $sn 编号
 * @property integer $record_id 退款记录id
 * @property integer $user_id 关联用户
 * @property integer $handle_id 处理人id（管理员id）
 * @property string $order_amount 订单总的应付款金额，冗余字段
 * @property string $refund_amount 本次退款金额
 * @property integer $refund_status 退款状态，0退款中，1退款成功，2退款失败
 * @property string $refund_msg 退款信息
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
trait HasLaRefundLog
{
}
