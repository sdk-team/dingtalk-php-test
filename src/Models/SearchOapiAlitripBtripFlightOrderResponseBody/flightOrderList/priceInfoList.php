<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderResponseBody\flightOrderList;

use AlibabaCloud\Tea\Model;

class priceInfoList extends Model {
    protected $_name = [
        'price' => 'price',
        'type' => 'type',
        'category' => 'category',
        'payType' => 'pay_type',
        'gmtCreate' => 'gmt_create',
        'passengerName' => 'passenger_name',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return priceInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['price'])){
            $model->price = $map['price'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['category'])){
            $model->category = $map['category'];
        }
        if(isset($map['pay_type'])){
            $model->payType = $map['pay_type'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['passenger_name'])){
            $model->passengerName = $map['passenger_name'];
        }
        return $model;
    }
    /**
     * @description 价格
     * @var string
     */
    public $price;

    /**
     * @description 资金流向:1:支出，2:收入
     * @var int
     */
    public $type;

    /**
     * @description 交易类目
     * @var string
     */
    public $category;

    /**
     * @description 结算方式:1：个人现付，2:企业现付,4:企业月结，8、企业预存
     * @var int
     */
    public $payType;

    /**
     * @description 流水创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 乘机人，多个用‘,’分割
     * @var string
     */
    public $passengerName;

}
