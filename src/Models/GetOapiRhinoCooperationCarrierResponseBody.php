<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoCooperationCarrierResponseBody\model;

class GetOapiRhinoCooperationCarrierResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'model' => 'model',
        'errmsg' => 'errmsg',
        'externalMsgInfo' => 'external_msg_info',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->model) {
            $res['model'] = null !== $this->model ? $this->model->toMap() : null;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->externalMsgInfo) {
            $res['external_msg_info'] = $this->externalMsgInfo;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiRhinoCooperationCarrierResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['model'])){
            $model->model = model::fromMap($map['model']);
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['external_msg_info'])){
            $model->externalMsgInfo = $map['external_msg_info'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 返回数据
     * @var model
     */
    public $model;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 扩展信息
     * @var string
     */
    public $externalMsgInfo;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

}
