<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiImpaasOtoconversationParams\request;

use AlibabaCloud\Tea\Model;

class accountInfoList extends Model {
    protected $_name = [
        'channel' => 'channel',
        'id' => 'id',
        'type' => 'type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return accountInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        return $model;
    }
    /**
     * @description channel名称
     * @var string
     */
    public $channel;

    /**
     * @description id
     * @var string
     */
    public $id;

    /**
     * @description id类型
     * @var string
     */
    public $type;

}
