<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetprofileOapiImpaasUserParams\request;

use AlibabaCloud\Tea\Model;

class accountInfo extends Model {
    protected $_name = [
        'id' => 'id',
        'type' => 'type',
        'channel' => 'channel',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('type', $this->type, true);
    }
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
     * @return accountInfo
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
     * @description 待操作成员id，ID类型由type字段确定。当type为“staff”时，本字段填写staffid，当type为“channelUser”时，本字段填写channelUserId。
     * @var string
     */
    public $id;

    /**
     * @description 代操作成员ID类型，目前支持“staff” “channelUser”两种类型
     * @var string
     */
    public $type;

    /**
     * @description type为channelUser时有效。接入方channel信息，该值由接入方接入IMPaaS平台时，向IMPaaS平台申请，例如“hema”“eleme”等。
     * @var string
     */
    public $channel;

}
