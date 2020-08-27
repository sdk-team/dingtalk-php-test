<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncstatusOapiDingpayOrderResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncstatusOapiDingpayOrderResponseBody\result\orders;

class result extends Model {
    protected $_name = [
        'orders' => 'orders',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->orders) {
            $res['orders'] = [];
            if(null !== $this->orders && is_array($this->orders)){
                $n = 0;
                foreach($this->orders as $item){
                    $res['orders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['orders'])){
            if(!empty($map['orders'])){
                $model->orders = [];
                $n = 0;
                foreach($map['orders'] as $item) {
                    $model->orders[$n++] = null !== $item ? orders::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description orders
     * @var array
     */
    public $orders;

}
