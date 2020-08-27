<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyconversationidOapiRobotMessageStatisticsResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'name' => 'name',
        'conversationId' => 'conversation_id',
        'pushId' => 'push_id',
        'readStatus' => 'read_status',
        'dingtalkId' => 'dingtalk_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->conversationId) {
            $res['conversation_id'] = $this->conversationId;
        }
        if (null !== $this->pushId) {
            $res['push_id'] = $this->pushId;
        }
        if (null !== $this->readStatus) {
            $res['read_status'] = $this->readStatus;
        }
        if (null !== $this->dingtalkId) {
            $res['dingtalk_id'] = $this->dingtalkId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['conversation_id'])){
            $model->conversationId = $map['conversation_id'];
        }
        if(isset($map['push_id'])){
            $model->pushId = $map['push_id'];
        }
        if(isset($map['read_status'])){
            $model->readStatus = $map['read_status'];
        }
        if(isset($map['dingtalk_id'])){
            $model->dingtalkId = $map['dingtalk_id'];
        }
        return $model;
    }
    /**
     * @description 成员名称
     * @var string
     */
    public $name;

    /**
     * @description 群Id
     * @var string
     */
    public $conversationId;

    /**
     * @description 机器人消息推送Id
     * @var string
     */
    public $pushId;

    /**
     * @description 是否已读
     * @var bool
     */
    public $readStatus;

    /**
     * @description 钉钉id
     * @var string
     */
    public $dingtalkId;

}
