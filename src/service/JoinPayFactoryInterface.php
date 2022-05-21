<?php
/**
 * ---------------------------------------------------------------------------------------------------------------------
 * FileName: FactoryInterface.php
 * Description:
 * ---------------------------------------------------------------------------------------------------------------------
 * Author: jxmall
 * Date:    2022/5/11
 * Version: 1.0
 */

namespace joinpay\service;


interface JoinPayFactoryInterface
{
    /**
     * @param $driver
     * @return mixed
     */
    public function driver($driver);
}