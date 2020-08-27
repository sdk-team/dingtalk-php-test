<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UnionexportOapiSmartworkHrmEmployeeResponseBody\result;

class UnionexportOapiSmartworkHrmEmployeeResponseBody extends Model {
    protected $_name = [
        'isSuccess' => 'is_success',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'result' => 'result',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['is_success'] = $this->isSuccess;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UnionexportOapiSmartworkHrmEmployeeResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['is_success'])){
            $model->isSuccess = $map['is_success'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['result'])){
            $model->result = result::fromMap($map['result']);
        }
        return $model;
    }
    /**
     * @description 是否成功
     * @var bool
     */
    public $isSuccess;

    /**
     * @description 错误码
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误code
     * @var int
     */
    public $errcode;

    /**
     * @description 导出结果对象
     * @var result
     */
    public $result;

}
