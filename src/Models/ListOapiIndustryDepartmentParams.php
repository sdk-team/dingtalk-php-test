<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiIndustryDepartmentParams extends Model {
    protected $_name = [
        'deptId' => 'dept_id',
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('deptId', $this->deptId, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiIndustryDepartmentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 部门ID
     * @var int
     */
    public $deptId;

    /**
     * @description 游标，不传默认1
     * @var int
     */
    public $cursor;

    /**
     * @description 大小
     * @var int
     */
    public $size;

}
