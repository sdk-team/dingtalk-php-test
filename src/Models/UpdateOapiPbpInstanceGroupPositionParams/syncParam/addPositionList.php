<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiPbpInstanceGroupPositionParams\syncParam;

use AlibabaCloud\Tea\Model;

class addPositionList extends Model {
    protected $_name = [
        'positionId' => 'position_id',
        'positionType' => 'position_type',
        'positionName' => 'position_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->positionId) {
            $res['position_id'] = $this->positionId;
        }
        if (null !== $this->positionType) {
            $res['position_type'] = $this->positionType;
        }
        if (null !== $this->positionName) {
            $res['position_name'] = $this->positionName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return addPositionList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['position_id'])){
            $model->positionId = $map['position_id'];
        }
        if(isset($map['position_type'])){
            $model->positionType = $map['position_type'];
        }
        if(isset($map['position_name'])){
            $model->positionName = $map['position_name'];
        }
        return $model;
    }
    /**
     * @description 位置唯一标识
     * @var string
     */
    public $positionId;

    /**
     * @description 位置类型，如101表示B1
     * @var int
     */
    public $positionType;

    /**
     * @description 位置名称
     * @var string
     */
    public $positionName;

}
