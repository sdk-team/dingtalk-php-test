<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ChangeOapiRhinoSalesOrderCustomInfoStatusResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'errcode' => 'errcode',
        'model' => 'model',
        'errmsg' => 'errmsg',
        'externalMsgInfo' => 'external_msg_info',
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
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->externalMsgInfo) {
            $res['external_msg_info'] = $this->externalMsgInfo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ChangeOapiRhinoSalesOrderCustomInfoStatusResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['model'])){
            $model->model = $map['model'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['external_msg_info'])){
            $model->externalMsgInfo = $map['external_msg_info'];
        }
        return $model;
    }
    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description model
     * @var bool
     */
    public $model;

    /**
     * @description message
     * @var string
     */
    public $errmsg;

    /**
     * @description 额外信息
     * @var string
     */
    public $externalMsgInfo;

}
