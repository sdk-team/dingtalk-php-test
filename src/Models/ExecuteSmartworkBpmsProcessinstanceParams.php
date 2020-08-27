<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ExecuteSmartworkBpmsProcessinstanceParams extends Model {
    protected $_name = [
        'actionerUserid' => 'actioner_userid',
        'processInstanceId' => 'process_instance_id',
        'taskId' => 'task_id',
        'result' => 'result',
        'remark' => 'remark',
    ];
    public function validate() {
        Model::validateRequired('actionerUserid', $this->actionerUserid, true);
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('result', $this->result, true);
        Model::validateMaxLength('remark', $this->remark, 2000);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->actionerUserid) {
            $res['actioner_userid'] = $this->actionerUserid;
        }
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ExecuteSmartworkBpmsProcessinstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['actioner_userid'])){
            $model->actionerUserid = $map['actioner_userid'];
        }
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        return $model;
    }
    /**
     * @description 操作人id，通过dingtalk.smartwork.bpms.processinstance.get这个接口可以获取
     * @var string
     */
    public $actionerUserid;

    /**
     * @description 审批实例id
     * @var string
     */
    public $processInstanceId;

    /**
     * @description 任务节点id，dingtalk.smartwork.bpms.processinstance.get接口可获取
     * @var int
     */
    public $taskId;

    /**
     * @description 审批操作，同意-agree，拒绝-refuse
     * @var string
     */
    public $result;

    /**
     * @description 操作评论，可为空
     * @var string
     */
    public $remark;

}
