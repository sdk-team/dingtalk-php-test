<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiPbpInstancePositionResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'positionId' => 'position_id',
        'positionName' => 'position_name',
        'type' => 'type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->positionId) {
            $res['position_id'] = $this->positionId;
        }
        if (null !== $this->positionName) {
            $res['position_name'] = $this->positionName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['position_id'])){
            $model->positionId = $map['position_id'];
        }
        if(isset($map['position_name'])){
            $model->positionName = $map['position_name'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        return $model;
    }
    /**
     * @description 位置唯一标识，根据type不同类型不同，如硬件类型代表硬件设备唯一标识
     * @var string
     */
    public $positionId;

    /**
     * @description 位置名称
     * @var string
     */
    public $positionName;

    /**
     * @description 位置类型，如100代表硬件B1设备
     * @var int
     */
    public $type;

}
