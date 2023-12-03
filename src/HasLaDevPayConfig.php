<?php

namespace Iyuu\MovieModel;

/**
 * la_dev_pay_config 
 * @property integer $id (主键)
 * @property string $name 模版名称
 * @property integer $pay_way 支付方式:1-余额支付;2-微信支付;3-支付宝支付;
 * @property string $config 对应支付配置(json字符串)
 * @property string $icon 图标
 * @property integer $sort 排序
 * @property string $remark 备注
 */
trait HasLaDevPayConfig
{
}
