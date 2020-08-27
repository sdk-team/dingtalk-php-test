<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmessagestatusOapiImpaasMessageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'taskMsg' => 'task_msg',
        'taskCode' => 'task_code',
        'taskStatus' => 'task_status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->taskMsg) {
            $res['task_msg'] = $this->taskMsg;
        }
        if (null !== $this->taskCode) {
            $res['task_code'] = $this->taskCode;
        }
        if (null !== $this->taskStatus) {
            $res['task_status'] = $this->taskStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['task_msg'])){
            $model->taskMsg = $map['task_msg'];
        }
        if(isset($map['task_code'])){
            $model->taskCode = $map['task_code'];
        }
        if(isset($map['task_status'])){
            $model->taskStatus = $map['task_status'];
        }
        return $model;
    }
    /**
     * @description 错误信息
     * @var string
     */
    public $taskMsg;

    /**
     * @description 消息任务执行返回码 0表示成功
     * @var int
     */
    public $taskCode;

    /**
     * @description 消息任务执行状态 0：初始化，刚提交时的状态 3：处理中 4：处理完成 5：撤销
     * @var int
     */
    public $taskStatus;

}
