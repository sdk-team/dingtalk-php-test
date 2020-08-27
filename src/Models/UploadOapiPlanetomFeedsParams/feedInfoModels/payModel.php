<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UploadOapiPlanetomFeedsParams\feedInfoModels;

use AlibabaCloud\Tea\Model;

class payModel extends Model {
    protected $_name = [
        'csPhone' => 'cs_phone',
        'preferential' => 'preferential',
        'needPay' => 'need_pay',
        'price' => 'price',
        'disPrice' => 'dis_price',
        'disStartTime' => 'dis_start_time',
        'limitCount' => 'limit_count',
        'disEndTime' => 'dis_end_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->csPhone) {
            $res['cs_phone'] = $this->csPhone;
        }
        if (null !== $this->preferential) {
            $res['preferential'] = $this->preferential;
        }
        if (null !== $this->needPay) {
            $res['need_pay'] = $this->needPay;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->disPrice) {
            $res['dis_price'] = $this->disPrice;
        }
        if (null !== $this->disStartTime) {
            $res['dis_start_time'] = $this->disStartTime;
        }
        if (null !== $this->limitCount) {
            $res['limit_count'] = $this->limitCount;
        }
        if (null !== $this->disEndTime) {
            $res['dis_end_time'] = $this->disEndTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return payModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cs_phone'])){
            $model->csPhone = $map['cs_phone'];
        }
        if(isset($map['preferential'])){
            $model->preferential = $map['preferential'];
        }
        if(isset($map['need_pay'])){
            $model->needPay = $map['need_pay'];
        }
        if(isset($map['price'])){
            $model->price = $map['price'];
        }
        if(isset($map['dis_price'])){
            $model->disPrice = $map['dis_price'];
        }
        if(isset($map['dis_start_time'])){
            $model->disStartTime = $map['dis_start_time'];
        }
        if(isset($map['limit_count'])){
            $model->limitCount = $map['limit_count'];
        }
        if(isset($map['dis_end_time'])){
            $model->disEndTime = $map['dis_end_time'];
        }
        return $model;
    }
    /**
     * @description 客服手机号码
     * @var string
     */
    public $csPhone;

    /**
     * @description 是否优惠
     * @var bool
     */
    public $preferential;

    /**
     * @description 是否付费
     * @var bool
     */
    public $needPay;

    /**
     * @description 价格 单位分
     * @var int
     */
    public $price;

    /**
     * @description 优惠后价格 单位分
     * @var int
     */
    public $disPrice;

    /**
     * @description 优惠开始时间
     * @var int
     */
    public $disStartTime;

    /**
     * @description 售卖份数
     * @var int
     */
    public $limitCount;

    /**
     * @description 优惠结束时间
     * @var int
     */
    public $disEndTime;

}
