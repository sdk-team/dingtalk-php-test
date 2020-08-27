<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRobotMessageGrouptaskResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'sendStatus' => 'send_status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sendStatus) {
            $res['send_status'] = $this->sendStatus;
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
        return $model;
    }
    /**
     * @description 发送结果码，只有SUCCESS为成功
     * @var string
     */
    public $sendStatus;

}
