<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduUserRelationParams extends Model {
    protected $_name = [
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
        'classId' => 'class_id',
    ];
    public function validate() {
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('classId', $this->classId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduUserRelationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_no'])){
            $model->pageNo = $map['page_no'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        return $model;
    }
    /**
     * @description 从1开始
     * @var int
     */
    public $pageNo;

    /**
     * @description 最大值30，最小值1
     * @var int
     */
    public $pageSize;

    /**
     * @description 班级id
     * @var int
     */
    public $classId;

}
