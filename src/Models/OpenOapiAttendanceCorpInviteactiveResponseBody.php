<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class OpenOapiAttendanceCorpInviteactiveResponseBody extends Model {
    protected $_name = [
        'result' => 'result',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'success' => 'success',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return OpenOapiAttendanceCorpInviteactiveResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        return $model;
    }
    /**
     * @description 请求处理成功
     * @var bool
     */
    public $result;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 错误描述
     * @var string
     */
    public $errmsg;

    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

}
