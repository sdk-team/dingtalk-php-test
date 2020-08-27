<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduDeptParams extends Model {
    protected $_name = [
        'pageSize' => 'page_size',
        'pageNo' => 'page_no',
        'superId' => 'super_id',
    ];
    public function validate() {
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->superId) {
            $res['super_id'] = $this->superId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiEduDeptParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page_no'])){
            $model->pageNo = $map['page_no'];
        }
        if(isset($map['super_id'])){
            $model->superId = $map['super_id'];
        }
        return $model;
    }
    /**
     * @description 每页大小，最大30
     * @var int
     */
    public $pageSize;

    /**
     * @description 页码，从1开始
     * @var int
     */
    public $pageNo;

    /**
     * @description 父部门节点id，如果不填，则默认获取第一层级的部门节点
     * @var int
     */
    public $superId;

}
