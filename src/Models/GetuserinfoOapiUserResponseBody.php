<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetuserinfoOapiUserResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'userid' => 'userid',
        'deviceId' => 'deviceId',
        'isSys' => 'is_sys',
        'sysLevel' => 'sys_level',
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
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }
        if (null !== $this->isSys) {
            $res['is_sys'] = $this->isSys;
        }
        if (null !== $this->sysLevel) {
            $res['sys_level'] = $this->sysLevel;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetuserinfoOapiUserResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['deviceId'])){
            $model->deviceId = $map['deviceId'];
        }
        if(isset($map['is_sys'])){
            $model->isSys = $map['is_sys'];
        }
        if(isset($map['sys_level'])){
            $model->sysLevel = $map['sys_level'];
        }
        return $model;
    }
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

    /**
     * @description userid
     * @var string
     */
    public $userid;

    /**
     * @description deviceId
     * @var string
     */
    public $deviceId;

    /**
     * @description is_sys
     * @var bool
     */
    public $isSys;

    /**
     * @description sys_level
     * @var string
     */
    public $sysLevel;

}
