<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProcessWorkrecordTaskResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProcessWorkrecordTaskResponseBody\result\list_\forms;

class list_ extends Model {
    protected $_name = [
        'url' => 'url',
        'taskId' => 'task_id',
        'instanceId' => 'instance_id',
        'title' => 'title',
        'forms' => 'forms',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->forms) {
            $res['forms'] = [];
            if(null !== $this->forms && is_array($this->forms)){
                $n = 0;
                foreach($this->forms as $item){
                    $res['forms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        if(isset($map['instance_id'])){
            $model->instanceId = $map['instance_id'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['forms'])){
            if(!empty($map['forms'])){
                $model->forms = [];
                $n = 0;
                foreach($map['forms'] as $item) {
                    $model->forms[$n++] = null !== $item ? forms::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 跳转链接
     * @var string
     */
    public $url;

    /**
     * @description 任务id
     * @var string
     */
    public $taskId;

    /**
     * @description 实例id
     * @var string
     */
    public $instanceId;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 表单列表
     * @var array
     */
    public $forms;

}
