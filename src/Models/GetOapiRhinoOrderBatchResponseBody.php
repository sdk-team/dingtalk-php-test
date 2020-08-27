<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoOrderBatchResponseBody\model;

class GetOapiRhinoOrderBatchResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'model' => 'model',
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
        if (null !== $this->model) {
            $res['model'] = null !== $this->model ? $this->model->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiRhinoOrderBatchResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['model'])){
            $model->model = model::fromMap($map['model']);
        }
        return $model;
    }
    /**
     * @description 响应码
     * @var int
     */
    public $errcode;

    /**
     * @description 调用信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 返回内容
     * @var model
     */
    public $model;

}
