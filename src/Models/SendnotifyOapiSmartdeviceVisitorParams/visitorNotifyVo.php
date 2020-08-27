<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendnotifyOapiSmartdeviceVisitorParams;

use AlibabaCloud\Tea\Model;

class visitorNotifyVo extends Model {
    protected $_name = [
        'content' => 'content',
        'deviceId' => 'device_id',
        'notifyType' => 'notify_type',
        'userName' => 'user_name',
        'userid' => 'userid',
        'feedback' => 'feedback',
    ];
    public function validate() {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('notifyType', $this->notifyType, true);
        Model::validateRequired('userName', $this->userName, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->notifyType) {
            $res['notify_type'] = $this->notifyType;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->feedback) {
            $res['feedback'] = $this->feedback;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return visitorNotifyVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['notify_type'])){
            $model->notifyType = $map['notify_type'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['feedback'])){
            $model->feedback = $map['feedback'];
        }
        return $model;
    }
    /**
     * @description 消息内容
     * @var string
     */
    public $content;

    /**
     * @description 设备ID
     * @var int
     */
    public $deviceId;

    /**
     * @description 通知类型
     * @var int
     */
    public $notifyType;

    /**
     * @description 访客姓名
     * @var string
     */
    public $userName;

    /**
     * @description 外部联系ID
     * @var string
     */
    public $userid;

    /**
     * @description 接待意见反馈
     * @var string
     */
    public $feedback;

}
