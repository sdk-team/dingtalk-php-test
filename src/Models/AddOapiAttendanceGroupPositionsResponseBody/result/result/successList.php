<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupPositionsResponseBody\result\result;

use AlibabaCloud\Tea\Model;

class successList extends Model {
    protected $_name = [
        'foreignId' => 'foreign_id',
        'address' => 'address',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'positionKey' => 'position_key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->foreignId) {
            $res['foreign_id'] = $this->foreignId;
        }
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->positionKey) {
            $res['position_key'] = $this->positionKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return successList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['foreign_id'])){
            $model->foreignId = $map['foreign_id'];
        }
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['latitude'])){
            $model->latitude = $map['latitude'];
        }
        if(isset($map['longitude'])){
            $model->longitude = $map['longitude'];
        }
        if(isset($map['position_key'])){
            $model->positionKey = $map['position_key'];
        }
        return $model;
    }
    /**
     * @description 业务方positionId
     * @var string
     */
    public $foreignId;

    /**
     * @description 地址描述
     * @var string
     */
    public $address;

    /**
     * @description 经度(支持6位小数)
     * @var string
     */
    public $latitude;

    /**
     * @description 纬度(支持6位小数)
     * @var string
     */
    public $longitude;

    /**
     * @description positionKey
     * @var string
     */
    public $positionKey;

}
