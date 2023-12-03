<?php

namespace Iyuu\MovieModel;

/**
 * la_recharge_order 
 * @property integer $id id(主键)
 * @property string $sn 订单编号
 * @property integer $user_id 用户id
 * @property string $pay_sn 支付编号-冗余字段，针对微信同一主体不同客户端支付需用不同订单号预留。
 * @property integer $pay_way 支付方式 2-微信支付 3-支付宝支付
 * @property integer $pay_status 支付状态：0-待支付；1-已支付
 * @property integer $pay_time 支付时间
 * @property string $order_amount 充值金额
 * @property integer $order_terminal 终端
 * @property string $transaction_id 第三方平台交易流水号
 * @property integer $refund_status 退款状态 0-未退款 1-已退款
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
trait HasLaRechargeOrder
{
}
