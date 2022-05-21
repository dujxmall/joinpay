<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * FileName: OrderQuery.php
 * Description: 订单查询类
 * ---------------------------------------------------------------------------------------------------------------------
 * Author: jxmall
 * Date:    2022/5/11
 * Version: 1.0
 */
namespace joinpay\entity;

use joinpay\JoinPayClient;
use joinpay\service\JoinPayRequest;

class OrderQuery extends JoinPayRequest
{
    protected $uri = 'https://www.joinpay.com/trade/queryOrder.action';

    protected $method = 'POST';

    public function __construct($data=[])
    {
        parent::__construct($data);
        $this->params['p1_MerchantNo'] = JoinPayClient::getInstance()->merchant_no;
    }

    /**
     * 商户的唯一单号
     * @param $val
     * @return $this
     */
    public function setOrderNo($val){
        $this->params['p2_OrderNo'] = $val;
        return $this;
    }

    /**
     * 设置当前版本号
     * @param $val
     * @return $this
     */
    public function setVerison($val){
        $this->params['p0_Version'] = $val;
        return $this;
    }

    /**
     * 设置商户ID
     * @param $val
     * @return $this
     */
    public function setMerchantNo($val){
        $this->params['p1_MerchantNo'] = $val;
        return $this;
    }
}