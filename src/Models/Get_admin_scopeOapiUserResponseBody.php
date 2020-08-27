<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_admin_scopeOapiUserResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'deptIds' => 'dept_ids',
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
        if (null !== $this->deptIds) {
            $res['dept_ids'] = $this->deptIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_admin_scopeOapiUserResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['dept_ids'])){
            if(!empty($map['dept_ids'])){
                $model->deptIds = $map['dept_ids'];
            }
        }
        return $model;
    }
    /**
     * @description dingOpenErrcode
     * @var int
     */
    public $errcode;

    /**
     * @description errorMsg
     * @var string
     */
    public $errmsg;

    /**
     * @description result
     * @var array
     */
    public $deptIds;

}
