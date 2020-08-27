<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetuserinfoOapiSsoResponseBody\userInfo;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetuserinfoOapiSsoResponseBody\corpInfo;

class GetuserinfoOapiSsoResponseBody extends Model {
    protected $_name = [
        'userInfo' => 'user_info',
        'corpInfo' => 'corp_info',
        'isSys' => 'is_sys',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userInfo) {
            $res['user_info'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }
        if (null !== $this->corpInfo) {
            $res['corp_info'] = null !== $this->corpInfo ? $this->corpInfo->toMap() : null;
        }
        if (null !== $this->isSys) {
            $res['is_sys'] = $this->isSys;
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
     * @return GetuserinfoOapiSsoResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['user_info'])){
            $model->userInfo = userInfo::fromMap($map['user_info']);
        }
        if(isset($map['corp_info'])){
            $model->corpInfo = corpInfo::fromMap($map['corp_info']);
        }
        if(isset($map['is_sys'])){
            $model->isSys = $map['is_sys'];
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
     * @description user_info
     * @var userInfo
     */
    public $userInfo;

    /**
     * @description corp_info
     * @var corpInfo
     */
    public $corpInfo;

    /**
     * @description is_sys
     * @var bool
     */
    public $isSys;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

}
