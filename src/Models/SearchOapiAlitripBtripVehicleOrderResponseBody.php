<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripVehicleOrderResponseBody\vehicleOrderList;

class SearchOapiAlitripBtripVehicleOrderResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'success' => 'success',
        'vehicleOrderList' => 'vehicle_order_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->vehicleOrderList) {
            $res['vehicle_order_list'] = [];
            if(null !== $this->vehicleOrderList && is_array($this->vehicleOrderList)){
                $n = 0;
                foreach($this->vehicleOrderList as $item){
                    $res['vehicle_order_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiAlitripBtripVehicleOrderResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['vehicle_order_list'])){
            if(!empty($map['vehicle_order_list'])){
                $model->vehicleOrderList = [];
                $n = 0;
                foreach($map['vehicle_order_list'] as $item) {
                    $model->vehicleOrderList[$n++] = null !== $item ? vehicleOrderList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 返回码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 成功标识
     * @var bool
     */
    public $success;

    /**
     * @description 订单列表
     * @var array
     */
    public $vehicleOrderList;

}
