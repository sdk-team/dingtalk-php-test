<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecClothesConditionResponseBody\model;

class GetOapiRhinoMosExecClothesConditionResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'externalMsgInfo' => 'external_msg_info',
        'model' => 'model',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->externalMsgInfo) {
            $res['external_msg_info'] = $this->externalMsgInfo;
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
     * @return GetOapiRhinoMosExecClothesConditionResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['external_msg_info'])){
            $model->externalMsgInfo = $map['external_msg_info'];
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
     * @description 系统自动生成
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误信息
     * @var string
     */
    public $externalMsgInfo;

    /**
     * @description 返回值
     * @var model
     */
    public $model;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

}
