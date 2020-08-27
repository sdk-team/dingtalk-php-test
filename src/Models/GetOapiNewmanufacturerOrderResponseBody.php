<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiNewmanufacturerOrderResponseBody\model;

class GetOapiNewmanufacturerOrderResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'success' => 'success',
        'model' => 'model',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->model) {
            $res['model'] = null !== $this->model ? $this->model->toMap() : null;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiNewmanufacturerOrderResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['model'])){
            $model->model = model::fromMap($map['model']);
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description 错误编码
     * @var int
     */
    public $errcode;

    /**
     * @description 成功标记
     * @var string
     */
    public $success;

    /**
     * @description 订单信息
     * @var model
     */
    public $model;

    /**
     * @description 错误描述
     * @var string
     */
    public $errmsg;

}
