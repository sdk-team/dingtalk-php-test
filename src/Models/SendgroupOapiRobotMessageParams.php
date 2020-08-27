<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendgroupOapiRobotMessageParams extends Model {
    protected $_name = [
        'token' => 'token',
        'msgKey' => 'msg_key',
        'msgParam' => 'msg_param',
    ];
    public function validate() {
        Model::validateRequired('token', $this->token, true);
        Model::validateRequired('msgKey', $this->msgKey, true);
        Model::validateRequired('msgParam', $this->msgParam, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->msgKey) {
            $res['msg_key'] = $this->msgKey;
        }
        if (null !== $this->msgParam) {
            $res['msg_param'] = $this->msgParam;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendgroupOapiRobotMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['token'])){
            $model->token = $map['token'];
        }
        if(isset($map['msg_key'])){
            $model->msgKey = $map['msg_key'];
        }
        if(isset($map['msg_param'])){
            $model->msgParam = $map['msg_param'];
        }
        return $model;
    }
    /**
     * @description 群机器人webhook中的token
     * @var string
     */
    public $token;

    /**
     * @description 申请到的消息模板唯一标识符
     * @var string
     */
    public $msgKey;

    /**
     * @description 消息模板中，变量本次替换的值
     * @var string
     */
    public $msgParam;

}
