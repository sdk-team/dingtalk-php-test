<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GrouprobotOapiBipaasNotifyParams\robotNotify;

class GrouprobotOapiBipaasNotifyParams extends Model {
    protected $_name = [
        'robotNotify' => 'robot_notify',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->robotNotify) {
            $res['robot_notify'] = null !== $this->robotNotify ? $this->robotNotify->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GrouprobotOapiBipaasNotifyParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['robot_notify'])){
            $model->robotNotify = robotNotify::fromMap($map['robot_notify']);
        }
        return $model;
    }
    /**
     * @description 群机器人通知请求
     * @var robotNotify
     */
    public $robotNotify;

}
