<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class List_parent_depts_by_deptOapiDepartmentResponseBody extends Model {
    protected $_name = [
        'parentIds' => 'parentIds',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->parentIds) {
            $res['parentIds'] = $this->parentIds;
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
     * @return List_parent_depts_by_deptOapiDepartmentResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['parentIds'])){
            if(!empty($map['parentIds'])){
                $model->parentIds = $map['parentIds'];
            }
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
     * @description parentIds
     * @var array
     */
    public $parentIds;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

}
