<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\HeartbeatOapiOrgOpenencryptParams\topKmsHeartbeat;

class HeartbeatOapiOrgOpenencryptParams extends Model {
    protected $_name = [
        'topKmsHeartbeat' => 'top_kms_heartbeat',
    ];
    public function validate() {
        Model::validateRequired('topKmsHeartbeat', $this->topKmsHeartbeat, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->topKmsHeartbeat) {
            $res['top_kms_heartbeat'] = null !== $this->topKmsHeartbeat ? $this->topKmsHeartbeat->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return HeartbeatOapiOrgOpenencryptParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['top_kms_heartbeat'])){
            $model->topKmsHeartbeat = topKmsHeartbeat::fromMap($map['top_kms_heartbeat']);
        }
        return $model;
    }
    /**
     * @description 请求参数
     * @var topKmsHeartbeat
     */
    public $topKmsHeartbeat;

}
