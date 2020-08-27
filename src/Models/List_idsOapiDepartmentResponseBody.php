<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class List_idsOapiDepartmentResponseBody extends Model {
    protected $_name = [
        'subDeptIdList' => 'sub_dept_id_list',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->subDeptIdList) {
            $res['sub_dept_id_list'] = $this->subDeptIdList;
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
     * @return List_idsOapiDepartmentResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sub_dept_id_list'])){
            if(!empty($map['sub_dept_id_list'])){
                $model->subDeptIdList = $map['sub_dept_id_list'];
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
     * @description sub_dept_id_list
     * @var array
     */
    public $subDeptIdList;

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
