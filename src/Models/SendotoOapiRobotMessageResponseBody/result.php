<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendotoOapiRobotMessageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'processQueryKey' => 'process_query_key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->processQueryKey) {
            $res['process_query_key'] = $this->processQueryKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_query_key'])){
            $model->processQueryKey = $map['process_query_key'];
        }
        return $model;
    }
    /**
     * @description 用于查询发送进度的唯一标识
     * @var string
     */
    public $processQueryKey;

}
