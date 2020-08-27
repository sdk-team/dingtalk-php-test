<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendotoOapiRobotMessageParams extends Model {
    protected $_name = [
        'chatbotId' => 'chatbot_id',
        'staffId' => 'staff_id',
        'msgKey' => 'msg_key',
        'msgParam' => 'msg_param',
    ];
    public function validate() {
        Model::validateRequired('chatbotId', $this->chatbotId, true);
        Model::validateRequired('staffId', $this->staffId, true);
        Model::validateRequired('msgKey', $this->msgKey, true);
        Model::validateRequired('msgParam', $this->msgParam, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        if (null !== $this->staffId) {
            $res['staff_id'] = $this->staffId;
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
     * @return SendotoOapiRobotMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        if(isset($map['staff_id'])){
            $model->staffId = $map['staff_id'];
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
     * @description 申请到的企业机器人唯一标识符
     * @var string
     */
    public $chatbotId;

    /**
     * @description 员工的userid
     * @var string
     */
    public $staffId;

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
