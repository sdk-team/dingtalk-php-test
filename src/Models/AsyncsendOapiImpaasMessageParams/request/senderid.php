<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncsendOapiImpaasMessageParams\request;

use AlibabaCloud\Tea\Model;

class senderid extends Model {
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
     * @return senderid
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
     * @description 账号ID
     * @var string
     */
    public $id;

    /**
     * @description 账号类型:channelUser/staff。当类型为channelUser时，填写app自己的账号，当类型为staff时，填写钉钉的staffid
     * @var string
     */
    public $type;

    /**
     * @description 账号通道:eleme,hema等
     * @var string
     */
    public $channel;

}
