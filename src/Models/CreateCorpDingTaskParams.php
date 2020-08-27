<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpDingTaskParams\taskSendVO;

class CreateCorpDingTaskParams extends Model {
    protected $_name = [
        'taskSendVO' => 'task_send_v_o',
    ];
    public function validate() {
        Model::validateRequired('taskSendVO', $this->taskSendVO, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->taskSendVO) {
            $res['task_send_v_o'] = null !== $this->taskSendVO ? $this->taskSendVO->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateCorpDingTaskParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['task_send_v_o'])){
            $model->taskSendVO = taskSendVO::fromMap($map['task_send_v_o']);
        }
        return $model;
    }
    /**
     * @description 任务对外接口
     * @var taskSendVO
     */
    public $taskSendVO;

}
