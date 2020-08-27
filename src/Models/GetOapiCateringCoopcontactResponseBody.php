<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiCateringCoopcontactResponseBody extends Model {
    protected $_name = [
        'success' => 'success',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'expiration' => 'expiration',
        'priMobile' => 'pri_mobile',
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
        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }
        if (null !== $this->priMobile) {
            $res['pri_mobile'] = $this->priMobile;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiCateringCoopcontactResponseBody
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
        if(isset($map['expiration'])){
            $model->expiration = $map['expiration'];
        }
        if(isset($map['pri_mobile'])){
            $model->priMobile = $map['pri_mobile'];
        }
        return $model;
    }
    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 错误代码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 号码过期时间戳(毫秒)
     * @var int
     */
    public $expiration;

    /**
     * @description 临时隐私号
     * @var string
     */
    public $priMobile;

}
