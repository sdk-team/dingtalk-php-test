<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripFlightOrderResponseBody\flightOrderList;

class SearchOapiAlitripBtripFlightOrderResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'flightOrderList' => 'flight_order_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->flightOrderList) {
            $res['flight_order_list'] = [];
            if(null !== $this->flightOrderList && is_array($this->flightOrderList)){
                $n = 0;
                foreach($this->flightOrderList as $item){
                    $res['flight_order_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiAlitripBtripFlightOrderResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['flight_order_list'])){
            if(!empty($map['flight_order_list'])){
                $model->flightOrderList = [];
                $n = 0;
                foreach($map['flight_order_list'] as $item) {
                    $model->flightOrderList[$n++] = null !== $item ? flightOrderList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 成功标识
     * @var bool
     */
    public $success;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 机票列表
     * @var array
     */
    public $flightOrderList;

}
