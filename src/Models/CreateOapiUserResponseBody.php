<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiUserResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'userid' => 'userid',
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
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiUserResponseBody
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

}
