<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RecallOapiMessageMassParams extends Model {
    protected $_name = [
        'unionid' => 'unionid',
        'taskId' => 'task_id',
    ];
    public function validate() {
        Model::validateRequired('unionid', $this->unionid, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateMaxLength('unionid', $this->unionid, 128);
        Model::validateMaxLength('taskId', $this->taskId, 128);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RecallOapiMessageMassParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        return $model;
    }
    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

    /**
     * @description 消息发送任务id
     * @var string
     */
    public $taskId;

}
