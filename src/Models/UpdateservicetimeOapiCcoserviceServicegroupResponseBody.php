<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateservicetimeOapiCcoserviceServicegroupResponseBody extends Model {
    protected $_name = [
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'success' => 'success',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
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
     * @return UpdateservicetimeOapiCcoserviceServicegroupResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
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
     * @description errorMsg
     * @var string
     */
    public $errmsg;

    /**
     * @description dingOpenErrcode
     * @var int
     */
    public $errcode;

    /**
     * @description success
     * @var bool
     */
    public $success;

}
