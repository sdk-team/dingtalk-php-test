<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiRobotMessageGrouptaskParams extends Model {
    protected $_name = [
        'token' => 'token',
        'processQueryKey' => 'process_query_key',
    ];
    public function validate() {
        Model::validateRequired('token', $this->token, true);
        Model::validateRequired('processQueryKey', $this->processQueryKey, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->processQueryKey) {
            $res['process_query_key'] = $this->processQueryKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiRobotMessageGrouptaskParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['token'])){
            $model->token = $map['token'];
        }
        if(isset($map['process_query_key'])){
            $model->processQueryKey = $map['process_query_key'];
        }
        return $model;
    }
    /**
     * @description 群机器人webhook中的token
     * @var string
     */
    public $token;

    /**
     * @description 用于查询发送进度的唯一标识
     * @var string
     */
    public $processQueryKey;

}
