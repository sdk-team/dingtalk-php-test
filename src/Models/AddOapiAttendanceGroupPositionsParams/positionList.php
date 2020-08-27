<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupPositionsParams;

use AlibabaCloud\Tea\Model;

class positionList extends Model {
    protected $_name = [
        'address' => 'address',
        'foreignId' => 'foreign_id',
        'longitude' => 'longitude',
        'latitude' => 'latitude',
    ];
    public function validate() {
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('foreignId', $this->foreignId, true);
        Model::validateRequired('longitude', $this->longitude, true);
        Model::validateRequired('latitude', $this->latitude, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->foreignId) {
            $res['foreign_id'] = $this->foreignId;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return positionList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['foreign_id'])){
            $model->foreignId = $map['foreign_id'];
        }
        if(isset($map['longitude'])){
            $model->longitude = $map['longitude'];
        }
        if(isset($map['latitude'])){
            $model->latitude = $map['latitude'];
        }
        return $model;
    }
    /**
     * @description 地址描述
     * @var string
     */
    public $address;

    /**
     * @description 业务方positionId
     * @var string
     */
    public $foreignId;

    /**
     * @description 经度(支持6位小数)
     * @var string
     */
    public $longitude;

    /**
     * @description 纬度(支持6位小数)
     * @var string
     */
    public $latitude;

}
