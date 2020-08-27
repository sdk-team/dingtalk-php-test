<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Createo2oOapiImpaasConverstionParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Createo2oOapiImpaasConverstionParams\request\sender;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Createo2oOapiImpaasConverstionParams\request\receiver;

class request extends Model {
    protected $_name = [
        'extension' => 'extension',
        'sender' => 'sender',
        'senderEntranceId' => 'sender_entrance_id',
        'receiverEntranceId' => 'receiver_entrance_id',
        'receiver' => 'receiver',
        'uuid' => 'uuid',
        'channel' => 'channel',
    ];
    public function validate() {
        Model::validateRequired('sender', $this->sender, true);
        Model::validateRequired('senderEntranceId', $this->senderEntranceId, true);
        Model::validateRequired('receiverEntranceId', $this->receiverEntranceId, true);
        Model::validateRequired('receiver', $this->receiver, true);
        Model::validateRequired('channel', $this->channel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->sender) {
            $res['sender'] = null !== $this->sender ? $this->sender->toMap() : null;
        }
        if (null !== $this->senderEntranceId) {
            $res['sender_entrance_id'] = $this->senderEntranceId;
        }
        if (null !== $this->receiverEntranceId) {
            $res['receiver_entrance_id'] = $this->receiverEntranceId;
        }
        if (null !== $this->receiver) {
            $res['receiver'] = null !== $this->receiver ? $this->receiver->toMap() : null;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['sender'])){
            $model->sender = sender::fromMap($map['sender']);
        }
        if(isset($map['sender_entrance_id'])){
            $model->senderEntranceId = $map['sender_entrance_id'];
        }
        if(isset($map['receiver_entrance_id'])){
            $model->receiverEntranceId = $map['receiver_entrance_id'];
        }
        if(isset($map['receiver'])){
            $model->receiver = receiver::fromMap($map['receiver']);
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        return $model;
    }
    /**
     * @description 扩展数据,业务可以自定义，目前最大支持256B
     * @var string
     */
    public $extension;

    /**
     * @description 发送者
     * @var sender
     */
    public $sender;

    /**
     * @description 发送者二级会话入口ID
     * @var int
     */
    public $senderEntranceId;

    /**
     * @description 接收者二级会话入口ID
     * @var int
     */
    public $receiverEntranceId;

    /**
     * @description 接收者
     * @var receiver
     */
    public $receiver;

    /**
     * @description uuid, 用于防止弱网情况下超时导致重复创建, 一分钟内传递相同的uuid会返回同一个群，传空则不去重
     * @var string
     */
    public $uuid;

    /**
     * @description 接入方channel信息，该值由接入方接入IMPaaS平台时，向IMPaaS平台申请，例如“hema”“eleme”等。
     * @var string
     */
    public $channel;

}
