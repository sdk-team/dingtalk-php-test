<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiInspectFeedbackParams extends Model {
    protected $_name = [
        'taskId' => 'task_id',
        'formId' => 'form_id',
    ];
    public function validate() {
        Model::validateRequired('taskId', $this->taskId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->formId) {
            $res['form_id'] = $this->formId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiInspectFeedbackParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        if(isset($map['form_id'])){
            $model->formId = $map['form_id'];
        }
        return $model;
    }
    /**
     * @description 巡店任务唯一标识
     * @var string
     */
    public $taskId;

    /**
     * @description 表单标识（传空值，暂时保留）
     * @var string
     */
    public $formId;

}
