<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoOpenserviceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoOpenserviceResponseBody\result\model;

class result extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'success' => 'success',
        'model' => 'model',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->model) {
            $res['model'] = [];
            if(null !== $this->model && is_array($this->model)){
                $n = 0;
                foreach($this->model as $item){
                    $res['model'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['model'])){
            if(!empty($map['model'])){
                $model->model = [];
                $n = 0;
                foreach($map['model'] as $item) {
                    $model->model[$n++] = null !== $item ? model::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description code
     * @var int
     */
    public $errcode;

    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 返回结果
     * @var array
     */
    public $model;

    /**
     * @description message
     * @var string
     */
    public $errmsg;

}
