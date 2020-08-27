<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripHotelOrderResponseBody\module;

class SearchOapiAlitripBtripHotelOrderResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'module' => 'module',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->module) {
            $res['module'] = [];
            if(null !== $this->module && is_array($this->module)){
                $n = 0;
                foreach($this->module as $item){
                    $res['module'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiAlitripBtripHotelOrderResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['module'])){
            if(!empty($map['module'])){
                $model->module = [];
                $n = 0;
                foreach($map['module'] as $item) {
                    $model->module[$n++] = null !== $item ? module::fromMap($item) : $item;
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
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 酒店订单列表
     * @var array
     */
    public $module;

}
