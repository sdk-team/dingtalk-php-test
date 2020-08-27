<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendOapiCardIntelligentEmpgroupParams extends Model {
    protected $_name = [
        'receiverList' => 'receiver_list',
        'paramJson' => 'param_json',
        'msgKey' => 'msg_key',
        'uuid' => 'uuid',
    ];
    public function validate() {
        Model::validateRequired('msgKey', $this->msgKey, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->receiverList) {
            $res['receiver_list'] = $this->receiverList;
        }
        if (null !== $this->paramJson) {
            $res['param_json'] = $this->paramJson;
        }
        if (null !== $this->msgKey) {
            $res['msg_key'] = $this->msgKey;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiCardIntelligentEmpgroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['receiver_list'])){
            if(!empty($map['receiver_list'])){
                $model->receiverList = $map['receiver_list'];
            }
        }
        if(isset($map['param_json'])){
            $model->paramJson = $map['param_json'];
        }
        if(isset($map['msg_key'])){
            $model->msgKey = $map['msg_key'];
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        return $model;
    }
    /**
     * @description 卡片接收成员列表，不填写为全部接收
     * @var array
     */
    public $receiverList;

    /**
     * @description 卡片中需要填充的参数
     * @var string
     */
    public $paramJson;

    /**
     * @description 模版卡片注册的key
     * @var string
     */
    public $msgKey;

    /**
     * @description 卡片消息去重复，长度不能大于64
     * @var string
     */
    public $uuid;

}
