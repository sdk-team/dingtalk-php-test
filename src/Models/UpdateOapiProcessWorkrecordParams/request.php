<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiProcessWorkrecordParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processInstanceId' => 'process_instance_id',
        'status' => 'status',
        'result' => 'result',
        'cancelRunningTask' => 'cancel_running_task',
    ];
    public function validate() {
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->cancelRunningTask) {
            $res['cancel_running_task'] = $this->cancelRunningTask;
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
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        if(isset($map['cancel_running_task'])){
            $model->cancelRunningTask = $map['cancel_running_task'];
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

    /**
     * @description 实例状态，分为COMPLETED, TERMINATED
     * @var string
     */
    public $status;

    /**
     * @description 实例结果, 如果实例状态是COMPLETED，需要设置result，分为agree和refuse
     * @var string
     */
    public $result;

    /**
     * @description 取消任务
     * @var bool
     */
    public $cancelRunningTask;

}
