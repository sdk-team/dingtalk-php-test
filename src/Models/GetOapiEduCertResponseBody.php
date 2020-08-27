<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduCertResponseBody\result;

class GetOapiEduCertResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'result' => 'result',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
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
     * @return GetOapiEduCertResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['result'])){
            $model->result = result::fromMap($map['result']);
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
     * @description 请求是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 返回结果值
     * @var result
     */
    public $result;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误消息
     * @var string
     */
    public $errmsg;

}
