<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmessageOapiImpaasMessageParams\request;

use AlibabaCloud\Tea\Model;

class senderId extends Model {
    protected $_name = [
        'id' => 'id',
        'type' => 'type',
        'channel' => 'channel',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return senderId
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        return $model;
    }
    /**
     * @description 根据type类型确定
     * @var string
     */
    public $id;

    /**
     * @description staff:表示使用钉钉的员工账号，channelUser：表示业务自己的账号
     * @var string
     */
    public $type;

    /**
     * @description 业务对应的通道信息
     * @var string
     */
    public $channel;

}
