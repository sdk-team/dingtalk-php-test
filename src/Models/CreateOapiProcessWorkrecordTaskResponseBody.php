<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiProcessWorkrecordTaskResponseBody\tasks;

class CreateOapiProcessWorkrecordTaskResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'tasks' => 'tasks',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
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
     * @return CreateOapiProcessWorkrecordTaskResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
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
     * @description 0
     * @var int
     */
    public $errcode;

    /**
     * @description 成功
     * @var string
     */
    public $errmsg;

    /**
     * @description 任务列表
     * @var array
     */
    public $tasks;

}
