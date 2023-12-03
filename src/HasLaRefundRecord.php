<?php

namespace Iyuu\MovieModel;

/**
 * la_refund_record 
 * @property integer $id id(主键)
 * @property string $sn 退款编号
 * @property integer $user_id 关联用户
 * @property integer $order_id 来源订单id
 * @property string $order_sn 来源单号
 * @property string $order_type 订单来源 order-商品订单 recharge-充值订单
 * @property string $order_amount 订单总的应付款金额，冗余字段
 * @property string $refund_amount 本次退款金额
 * @property string $transaction_id 第三方平台交易流水号
 * @property integer $refund_way 退款方式 1-线上退款 2-线下退款
 * @property integer $refund_type 退款类型 1-后台退款
 * @property integer $refund_status 退款状态，0退款中，1退款成功，2退款失败
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
trait HasLaRefundRecord
{
}
