<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SendOapiChatbotMessageParams extends Model {
    protected $_name = [
        'chatbotId' => 'chatbot_id',
        'userid' => 'userid',
        'message' => 'message',
    ];
    public function validate() {
        Model::validateRequired('chatbotId', $this->chatbotId, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('message', $this->message, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiChatbotMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['message'])){
            $model->message = $map['message'];
        }
        return $model;
    }
    /**
     * @description 企业机器人模板类型
     * @var string
     */
    public $chatbotId;

    /**
     * @description 企业员工ID
     * @var string
     */
    public $userid;

    /**
     * @description 消息内容,支持的消息类型详见：https://open-doc.dingtalk.com/microapp/serverapi2/qf2nxq#a-namesgw3aga%E6%B6%88%E6%81%AF%E7%B1%BB%E5%9E%8B%E5%8F%8A%E6%95%B0%E6%8D%AE%E6%A0%BC%E5%BC%8F
     * @var string
     */
    public $message;

}
