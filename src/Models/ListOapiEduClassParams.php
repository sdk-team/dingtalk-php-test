<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduClassParams extends Model {
    protected $_name = [
        'gradeId' => 'grade_id',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
    ];
    public function validate() {
        Model::validateRequired('gradeId', $this->gradeId, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->gradeId) {
            $res['grade_id'] = $this->gradeId;
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
     * @return ListOapiEduClassParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['grade_id'])){
            $model->gradeId = $map['grade_id'];
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
     * @description 年级ID
     * @var int
     */
    public $gradeId;

    /**
     * @description 分页页数
     * @var int
     */
    public $pageNo;

    /**
     * @description 分页每页大小
     * @var int
     */
    public $pageSize;

}
