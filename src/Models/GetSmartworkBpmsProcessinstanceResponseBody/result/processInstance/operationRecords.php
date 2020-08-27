<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetSmartworkBpmsProcessinstanceResponseBody\result\processInstance;

use AlibabaCloud\Tea\Model;

class operationRecords extends Model {
    protected $_name = [
        'userid' => 'userid',
        'date' => 'date',
        'operationType' => 'operation_type',
        'operationResult' => 'operation_result',
        'remark' => 'remark',
    ];
    public function validate() {
        Model::validatePattern('date', $this->date, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->operationType) {
            $res['operation_type'] = $this->operationType;
        }
        if (null !== $this->operationResult) {
            $res['operation_result'] = $this->operationResult;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return operationRecords
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['date'])){
            $model->date = $map['date'];
        }
        if(isset($map['operation_type'])){
            $model->operationType = $map['operation_type'];
        }
        if(isset($map['operation_result'])){
            $model->operationResult = $map['operation_result'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        return $model;
    }
    /**
     * @description 操作人
     * @var string
     */
    public $userid;

    /**
     * @description 时间
     * @var string
     */
    public $date;

    /**
     * @description 操作类型，分为EXECUTE_TASK_NORMAL（正常执行任务），EXECUTE_TASK_AGENT（代理人执行任务），APPEND_TASK_BEFORE（前加签任务），APPEND_TASK_AFTER（后加签任务），REDIRECT_TASK（转交任务），START_PROCESS_INSTANCE（发起流程实例），TERMINATE_PROCESS_INSTANCE（终止(撤销)流程实例），FINISH_PROCESS_INSTANCE（结束流程实例），ADD_REMARK（添加评论）
     * @var string
     */
    public $operationType;

    /**
     * @description 操作结果，分为AGREE（同意），REFUSE（拒绝）
     * @var string
     */
    public $operationResult;

    /**
     * @description 评论
     * @var string
     */
    public $remark;

}
