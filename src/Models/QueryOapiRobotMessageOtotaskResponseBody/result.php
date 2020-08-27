<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRobotMessageOtotaskResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'sendStatus' => 'send_status',
        'readStatus' => 'read_status',
        'readTimestamp' => 'read_timestamp',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sendStatus) {
            $res['send_status'] = $this->sendStatus;
        }
        if (null !== $this->readStatus) {
            $res['read_status'] = $this->readStatus;
        }
        if (null !== $this->readTimestamp) {
            $res['read_timestamp'] = $this->readTimestamp;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['send_status'])){
            $model->sendStatus = $map['send_status'];
        }
        if(isset($map['read_status'])){
            $model->readStatus = $map['read_status'];
        }
        if(isset($map['read_timestamp'])){
            $model->readTimestamp = $map['read_timestamp'];
        }
        return $model;
    }
    /**
     * @description 发送结果码，只有SUCCESS为成功
     * @var string
     */
    public $sendStatus;

    /**
     * @description READ 已读，UNREAD 未读
     * @var string
     */
    public $readStatus;

    /**
     * @description 消息已读时间戳，单位：秒
     * @var int
     */
    public $readTimestamp;

}
