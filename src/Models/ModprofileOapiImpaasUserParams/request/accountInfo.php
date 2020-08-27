<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModprofileOapiImpaasUserParams\request;

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
        Model::validateRequired('channel', $this->channel, true);
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
     * @description 账号id
     * @var string
     */
    public $id;

    /**
     * @description 类型
     * @var string
     */
    public $type;

    /**
     * @description 渠道
     * @var string
     */
    public $channel;

}
