<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BetaOapiCateringCooplistGetResponseBody\result\list_;

use AlibabaCloud\Tea\Model;

class mealItemList extends Model {
    protected $_name = [
        'deliveryTime' => 'delivery_time',
        'title' => 'title',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deliveryTime) {
            $res['delivery_time'] = $this->deliveryTime;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return mealItemList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['delivery_time'])){
            $model->deliveryTime = $map['delivery_time'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 送达时间 HH:mm
     * @var string
     */
    public $deliveryTime;

    /**
     * @description 点餐项名称
     * @var string
     */
    public $title;

    /**
     * @description id
     * @var int
     */
    public $id;

}
