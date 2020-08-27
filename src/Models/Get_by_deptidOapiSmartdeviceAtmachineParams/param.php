<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_by_deptidOapiSmartdeviceAtmachineParams;

use AlibabaCloud\Tea\Model;

class param extends Model {
    protected $_name = [
        'offset' => 'offset',
        'size' => 'size',
        'deptid' => 'deptid',
    ];
    public function validate() {
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('deptid', $this->deptid, true);
        Model::validateMaximum('size', $this->size, 50);
        Model::validateMinimum('size', $this->size, 1);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->deptid) {
            $res['deptid'] = $this->deptid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['deptid'])){
            $model->deptid = $map['deptid'];
        }
        return $model;
    }
    /**
     * @description 偏移值
     * @var int
     */
    public $offset;

    /**
     * @description 每页大小
     * @var int
     */
    public $size;

    /**
     * @description 部门id
     * @var int
     */
    public $deptid;

}
