<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessinstanceParams;

use AlibabaCloud\Tea\Model;

class approversV2 extends Model {
    protected $_name = [
        'taskActionType' => 'task_action_type',
        'userIds' => 'user_ids',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->taskActionType) {
            $res['task_action_type'] = $this->taskActionType;
        }
        if (null !== $this->userIds) {
            $res['user_ids'] = $this->userIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return approversV2
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['task_action_type'])){
            $model->taskActionType = $map['task_action_type'];
        }
        if(isset($map['user_ids'])){
            if(!empty($map['user_ids'])){
                $model->userIds = $map['user_ids'];
            }
        }
        return $model;
    }
    /**
     * @description 审批类型，会签：AND；或签：OR；单人：NONE
     * @var string
     */
    public $taskActionType;

    /**
     * @description 审批人userid列表，会签/或签列表长度必须大于1，非会签/或签列表长度只能为1
     * @var array
     */
    public $userIds;

}
