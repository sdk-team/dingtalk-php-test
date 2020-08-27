<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\MigrateOapiWorkspaceTaskParams\task;

class MigrateOapiWorkspaceTaskParams extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'task' => 'task',
        'operatorUserid' => 'operator_userid',
    ];
    public function validate() {
        Model::validateRequired('task', $this->task, true);
        Model::validateRequired('operatorUserid', $this->operatorUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->task) {
            $res['task'] = null !== $this->task ? $this->task->toMap() : null;
        }
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return MigrateOapiWorkspaceTaskParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['task'])){
            $model->task = task::fromMap($map['task']);
        }
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        return $model;
    }
    /**
     * @description 微应用agentId
     * @var int
     */
    public $agentid;

    /**
     * @description 请求入参
     * @var task
     */
    public $task;

    /**
     * @description 操作者id
     * @var string
     */
    public $operatorUserid;

}
