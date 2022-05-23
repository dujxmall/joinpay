<?php
/**
 * ---------------------------------------------------------------------------------------------------------------------
 * FileName: SinglePay.php
 * Description: 单笔代付
 * ---------------------------------------------------------------------------------------------------------------------
 * Author: jxmall
 * Date:    2022/5/11
 * Version: 1.0
 */

namespace joinpay\entity;

use joinpay\JoinPayClient;
use joinpay\service\JoinPayRequest;

/**
 * Class SinglePay
 * @package joinpay\entity
 * 单笔代付
 */
class SinglePay extends JoinPayRequest
{
    protected $uri = 'https://www.joinpay.com/payment/pay/singlePay';

    protected $method = "POST";

    function __construct($data = [])
    {
        parent::__construct($data);
    }

    /**
     * 设置商户号
     * @param $val
     * @return $this
     */
    public function setMerchantNo($val)
    {
        $this->params['userNo'] = $val;
        return $this;
    }

    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:45
     * Note：报备商户号
     */
    public function setTradeMerchantNo($val)
    {
        $this->params['tradeMerchantNo'] = $val;
        return $this;
    }

    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:49
     * Note：设置收款人银行卡卡号
     */

    public function setReceiverAccountNoEnc($val)
    {
        $this->params['receiverAccountNoEnc'] = $val;
        return $this;
    }


    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:49
     * Note：设置持卡人名称
     */

    public function setReceiverNameEnc($val)
    {
        $this->params['receiverNameEnc'] = $val;
        return $this;
    }


    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:49
     * Note：设置账户类型 对私账户：201    对公账户：204
     */

    public function setReceiverAccountType($val)
    {
        $this->params['receiverAccountType'] = $val;
        return $this;
    }

    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:49
     * Note：设置收款账户联行号 对公账户必须填写此字段
     */
    public function setReceiverBankChannelNo($val)
    {
        $this->params['receiverBankChannelNo'] = $val;
        return $this;
    }


    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:48
     * Note：设置请求时间
     */
    public function setRequestTime($val)
    {
        $this->params['requestTime'] = $val;
        return $this;
    }


    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:44
     * Note：设置商户订单号
     */
    public function setMerchantOrderNo($val)
    {
        $this->params['merchantOrderNo'] = $val;
        return $this;
    }

    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:45
     * Note：设置产品编号
     */
    public function setProductCode($val)
    {
        $this->params['productCode'] = $val;
        return $this;
    }

    /**
     * 代付金额
     * @param $val
     * @return $this
     */
    public function setAmount($val)
    {
        $this->params['paidAmount'] = $val;
        return $this;
    }

    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:43
     * Note：设置当前币种
     */
    public function setCurrency($val)
    {
        $this->params['currency'] = $val;
    }

    /**
     * 社渚商品名称
     * @param $val
     * @return $this
     */
    public function setProductName($val)
    {
        $this->params['p5_ProductName'] = $val;
        return $this;
    }

    /**
     * 代付说明
     * @param $val
     * @return $this
     */
    public function setPaidDesc($val)
    {
        $this->params['paidDesc'] = $val;
        return $this;
    }

    /**
     * 设置异步回调地址
     * @param $val
     * @return $this
     */
    public function setNotifyUrl($val)
    {
        $this->params['callbackUrl'] = $val;
        return $this;
    }

    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:41
     * Note：优先使用产品
     */
    public function setFirstProductCode($val)
    {
        $this->params['firstProductCode'] = $val;
        return $this;
    }
    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:41
     * Note：设置是否需要复核 复核：201，不复核：202 (见注释一)
     */

    public function setIsChecked($val)
    {
        $this->params['isChecked'] = $val;
        return $this;
    }
    /**
     * Created by PhpStorm.
     * User：ganxi
     * Date：2022/5/23
     * Time：9:41
     * Note：代付用户
     */

    public function setPaidUse($val)
    {
        $this->params['paidUse'] = $val;
        return $this;
    }
}