<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosSpaceWorkerCheckInResponseBody\model;

class ListOapiRhinoMosSpaceWorkerCheckInResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'model' => 'model',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
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
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiRhinoMosSpaceWorkerCheckInResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
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
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 结果
     * @var array
     */
    public $model;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

}
