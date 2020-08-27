<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoOrderDetailResponseBody\model;

class GetOapiRhinoOrderDetailResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'model' => 'model',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->model) {
            $res['model'] = null !== $this->model ? $this->model->toMap() : null;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiRhinoOrderDetailResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['model'])){
            $model->model = model::fromMap($map['model']);
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 响应消息
     * @var string
     */
    public $errmsg;

    /**
     * @description 处理结果
     * @var model
     */
    public $model;

    /**
     * @description 钉钉响应码
     * @var int
     */
    public $errcode;

}
