<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AsyncsendOapiImpaasMessageResponseBody extends Model {
    protected $_name = [
        'taskid' => 'taskid',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->taskid) {
            $res['taskid'] = $this->taskid;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AsyncsendOapiImpaasMessageResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['taskid'])){
            $model->taskid = $map['taskid'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 异步任务返回的ID
     * @var int
     */
    public $taskid;

    /**
     * @description 返回描述信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 返回码
     * @var int
     */
    public $errcode;

}
