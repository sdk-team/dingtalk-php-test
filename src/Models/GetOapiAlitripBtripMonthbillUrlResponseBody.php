<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAlitripBtripMonthbillUrlResponseBody\module;

class GetOapiAlitripBtripMonthbillUrlResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'module' => 'module',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->module) {
            $res['module'] = [];
            if(null !== $this->module && is_array($this->module)){
                $n = 0;
                foreach($this->module as $item){
                    $res['module'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiAlitripBtripMonthbillUrlResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['module'])){
            if(!empty($map['module'])){
                $model->module = [];
                $n = 0;
                foreach($map['module'] as $item) {
                    $model->module[$n++] = null !== $item ? module::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description 成功标识
     * @var bool
     */
    public $success;

    /**
     * @description 结果对象
     * @var array
     */
    public $module;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

}
