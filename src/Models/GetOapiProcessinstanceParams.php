<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiProcessinstanceParams extends Model {
    protected $_name = [
        'processInstanceId' => 'process_instance_id',
    ];
    public function validate() {
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiProcessinstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        return $model;
    }
    /**
     * @description 审批实例id
     * @var string
     */
    public $processInstanceId;

}
