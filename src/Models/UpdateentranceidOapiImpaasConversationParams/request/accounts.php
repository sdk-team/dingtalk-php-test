<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateentranceidOapiImpaasConversationParams\request;

use AlibabaCloud\Tea\Model;

class accounts extends Model {
    protected $_name = [
        'channel' => 'channel',
        'type' => 'type',
        'id' => 'id',
    ];
    public function validate() {
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('id', $this->id, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return accounts
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 账号通道:eleme,hema等
     * @var string
     */
    public $channel;

    /**
     * @description 账号类型:channelUser/staff。当类型为channelUser时，填写app自己的账号，当类型为staff时，填写钉钉的staffid
     * @var string
     */
    public $type;

    /**
     * @description 账号ID
     * @var string
     */
    public $id;

}
