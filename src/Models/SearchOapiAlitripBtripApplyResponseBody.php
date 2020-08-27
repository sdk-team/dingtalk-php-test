<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripApplyResponseBody\module;

class SearchOapiAlitripBtripApplyResponseBody extends Model {
    protected $_name = [
        'module' => 'module',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'success' => 'success',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->module) {
            $res['module'] = [];
            if(null !== $this->module && is_array($this->module)){
                $n = 0;
                foreach($this->module as $item){
                    $res['module'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiAlitripBtripApplyResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['module'])){
            if(!empty($map['module'])){
                $model->module = [];
                $n = 0;
                foreach($map['module'] as $item) {
                    $model->module[$n++] = null !== $item ? module::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        return $model;
    }
    /**
     * @description 审批单列表
     * @var array
     */
    public $module;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 成功标识
     * @var bool
     */
    public $success;

}
