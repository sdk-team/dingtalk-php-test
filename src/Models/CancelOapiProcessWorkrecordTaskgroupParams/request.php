<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CancelOapiProcessWorkrecordTaskgroupParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processInstanceId' => 'process_instance_id',
        'activityId' => 'activity_id',
        'activityIdList' => 'activity_id_list',
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
        if (null !== $this->activityId) {
            $res['activity_id'] = $this->activityId;
        }
        if (null !== $this->activityIdList) {
            $res['activity_id_list'] = $this->activityIdList;
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
        if(isset($map['activity_id_list'])){
            if(!empty($map['activity_id_list'])){
                $model->activityIdList = $map['activity_id_list'];
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
     * @description 任务组id
     * @var string
     */
    public $activityId;

    /**
     * @description 任务组id列表
     * @var array
     */
    public $activityIdList;

}
