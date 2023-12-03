<?php

namespace Iyuu\MovieModel;

/**
 * la_dev_pay_way 
 * @property integer $id (主键)
 * @property integer $pay_config_id 支付配置ID
 * @property integer $scene 场景:1-微信小程序;2-微信公众号;3-H5;4-PC;5-APP;
 * @property integer $is_default 是否默认支付:0-否;1-是;
 * @property integer $status 状态:0-关闭;1-开启;
 */
trait HasLaDevPayWay
{
}
