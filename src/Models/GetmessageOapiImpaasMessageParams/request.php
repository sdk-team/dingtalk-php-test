<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmessageOapiImpaasMessageParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmessageOapiImpaasMessageParams\request\receiverId;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmessageOapiImpaasMessageParams\request\senderId;

class request extends Model {
    protected $_name = [
        'groupId' => 'group_id',
        'receiverId' => 'receiver_id',
        'limitNum' => 'limit_num',
        'senderId' => 'sender_id',
        'begTime' => 'beg_time',
    ];
    public function validate() {
        Model::validateRequired('limitNum', $this->limitNum, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->receiverId) {
            $res['receiver_id'] = null !== $this->receiverId ? $this->receiverId->toMap() : null;
        }
        if (null !== $this->limitNum) {
            $res['limit_num'] = $this->limitNum;
        }
        if (null !== $this->senderId) {
            $res['sender_id'] = null !== $this->senderId ? $this->senderId->toMap() : null;
        }
        if (null !== $this->begTime) {
            $res['beg_time'] = $this->begTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['receiver_id'])){
            $model->receiverId = receiverId::fromMap($map['receiver_id']);
        }
        if(isset($map['limit_num'])){
            $model->limitNum = $map['limit_num'];
        }
        if(isset($map['sender_id'])){
            $model->senderId = senderId::fromMap($map['sender_id']);
        }
        if(isset($map['beg_time'])){
            $model->begTime = $map['beg_time'];
        }
        return $model;
    }
    /**
     * @description 群id
     * @var string
     */
    public $groupId;

    /**
     * @description 单聊消息时使用，暂时不支持，可以不填
     * @var receiverId
     */
    public $receiverId;

    /**
     * @description 获取的消息数量，总的数量小于需要获取的数量时，返回实际的消息数量.1-20之间
     * @var int
     */
    public $limitNum;

    /**
     * @description 单聊消息时使用，暂时不支持，可以不填
     * @var senderId
     */
    public $senderId;

    /**
     * @description 从什么时候开始查，utc时间，单位毫秒
     * @var int
     */
    public $begTime;

}
