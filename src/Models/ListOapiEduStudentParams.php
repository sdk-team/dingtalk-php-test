<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduStudentParams extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduStudentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['page_no'])){
            $model->pageNo = $map['page_no'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        return $model;
    }
    /**
     * @description 班级ID
     * @var int
     */
    public $classId;

    /**
     * @description 页码
     * @var int
     */
    public $pageNo;

    /**
     * @description 每页大小
     * @var int
     */
    public $pageSize;

}
