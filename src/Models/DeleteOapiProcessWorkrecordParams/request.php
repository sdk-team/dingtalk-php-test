<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiProcessWorkrecordParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processInstanceId' => 'process_instance_id',
    ];
    public function validate() {
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        return $model;
    }
    /**
     * @description 应用id
     * @var int
     */
    public $agentid;

    /**
     * @description 实例id
     * @var string
     */
    public $processInstanceId;

}
