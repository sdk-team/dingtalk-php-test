<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripTrainOrderResponseBody\trainOrderList;

class SearchOapiAlitripBtripTrainOrderResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'trainOrderList' => 'train_order_list',
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
        if (null !== $this->trainOrderList) {
            $res['train_order_list'] = [];
            if(null !== $this->trainOrderList && is_array($this->trainOrderList)){
                $n = 0;
                foreach($this->trainOrderList as $item){
                    $res['train_order_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiAlitripBtripTrainOrderResponseBody
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
        if(isset($map['train_order_list'])){
            if(!empty($map['train_order_list'])){
                $model->trainOrderList = [];
                $n = 0;
                foreach($map['train_order_list'] as $item) {
                    $model->trainOrderList[$n++] = null !== $item ? trainOrderList::fromMap($item) : $item;
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
     * @description module
     * @var array
     */
    public $trainOrderList;

}
