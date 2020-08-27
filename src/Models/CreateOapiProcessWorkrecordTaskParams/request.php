<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessWorkrecordTaskParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessWorkrecordTaskParams\request\tasks;

class request extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processInstanceId' => 'process_instance_id',
        'activityId' => 'activity_id',
        'tasks' => 'tasks',
    ];
    public function validate() {
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
        Model::validateRequired('tasks', $this->tasks, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        if (null !== $this->activityId) {
            $res['activity_id'] = $this->activityId;
        }
        if (null !== $this->tasks) {
            $res['tasks'] = [];
            if(null !== $this->tasks && is_array($this->tasks)){
                $n = 0;
                foreach($this->tasks as $item){
                    $res['tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if(isset($map['activity_id'])){
            $model->activityId = $map['activity_id'];
        }
        if(isset($map['tasks'])){
            if(!empty($map['tasks'])){
                $model->tasks = [];
                $n = 0;
                foreach($map['tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
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
     * @description 节点id
     * @var string
     */
    public $activityId;

    /**
     * @description 任务列表
     * @var array
     */
    public $tasks;

}
