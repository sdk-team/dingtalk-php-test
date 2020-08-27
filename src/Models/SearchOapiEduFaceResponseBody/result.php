<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiEduFaceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiEduFaceResponseBody\result\faces;

class result extends Model {
    protected $_name = [
        'faces' => 'faces',
        'taskId' => 'task_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->faces) {
            $res['faces'] = [];
            if(null !== $this->faces && is_array($this->faces)){
                $n = 0;
                foreach($this->faces as $item){
                    $res['faces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['faces'])){
            if(!empty($map['faces'])){
                $model->faces = [];
                $n = 0;
                foreach($map['faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? faces::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        return $model;
    }
    /**
     * @description 人脸列表
     * @var array
     */
    public $faces;

    /**
     * @description 任务id
     * @var string
     */
    public $taskId;

}
