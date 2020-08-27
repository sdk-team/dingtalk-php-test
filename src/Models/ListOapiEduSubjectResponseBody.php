<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduSubjectResponseBody\data;

class ListOapiEduSubjectResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'data' => 'data',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduSubjectResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['data'])){
            $model->data = data::fromMap($map['data']);
        }
        return $model;
    }
    /**
     * @description 是否调用成功
     * @var bool
     */
    public $success;

    /**
     * @description 错误编码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误msg
     * @var string
     */
    public $errmsg;

    /**
     * @description 返回结果
     * @var data
     */
    public $data;

}
