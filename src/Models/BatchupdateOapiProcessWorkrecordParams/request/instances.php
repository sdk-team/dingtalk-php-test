<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchupdateOapiProcessWorkrecordParams\request;

use AlibabaCloud\Tea\Model;

class instances extends Model {
    protected $_name = [
        'processInstanceId' => 'process_instance_id',
        'status' => 'status',
        'result' => 'result',
    ];
    public function validate() {
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('result', $this->result, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return instances
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        return $model;
    }
    /**
     * @description 实例id，通过创建待办实例接口获取
     * @var string
     */
    public $processInstanceId;

    /**
     * @description 实例状态，分为COMPLETED, TERMINATED
     * @var string
     */
    public $status;

    /**
     * @description 任务结果，分为agree和refuse
     * @var string
     */
    public $result;

}
