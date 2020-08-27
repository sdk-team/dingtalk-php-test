<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetlogintokenOapiImpaasUserParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'id' => 'id',
        'channel' => 'channel',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('channel', $this->channel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        return $model;
    }
    /**
     * @description 二方账号
     * @var string
     */
    public $id;

    /**
     * @description 渠道类型
     * @var string
     */
    public $channel;

}
