<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryonjobOapiSmartworkHrmEmployeeParams extends Model {
    protected $_name = [
        'statusList' => 'status_list',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('statusList', $this->statusList, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMinimum('offset', $this->offset, 0);
        Model::validateMinimum('size', $this->size, 1);
        Model::validateMaximum('size', $this->size, 50);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->statusList) {
            $res['status_list'] = $this->statusList;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryonjobOapiSmartworkHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['status_list'])){
            if(!empty($map['status_list'])){
                $model->statusList = $map['status_list'];
            }
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 在职员工子状态筛选。2，试用期；3，正式；5，待离职；-1，无状态
     * @var array
     */
    public $statusList;

    /**
     * @description 分页起始值，默认0开始
     * @var int
     */
    public $offset;

    /**
     * @description 分页大小，最大50
     * @var int
     */
    public $size;

}
