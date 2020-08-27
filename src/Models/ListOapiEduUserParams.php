<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduUserParams extends Model {
    protected $_name = [
        'pageSize' => 'page_size',
        'pageNo' => 'page_no',
        'role' => 'role',
        'classId' => 'class_id',
    ];
    public function validate() {
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('role', $this->role, true);
        Model::validateRequired('classId', $this->classId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page_no'])){
            $model->pageNo = $map['page_no'];
        }
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        return $model;
    }
    /**
     * @description 最大30条，最小1条
     * @var int
     */
    public $pageSize;

    /**
     * @description 页码，从1开始
     * @var int
     */
    public $pageNo;

    /**
     * @description 家校人员身份
     * @var string
     */
    public $role;

    /**
     * @description 班级id
     * @var int
     */
    public $classId;

}
