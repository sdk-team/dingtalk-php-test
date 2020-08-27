<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCalendarV2EventParams\event;

use AlibabaCloud\Tea\Model;

class location extends Model {
    protected $_name = [
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'place' => 'place',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->place) {
            $res['place'] = $this->place;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return location
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['latitude'])){
            $model->latitude = $map['latitude'];
        }
        if(isset($map['longitude'])){
            $model->longitude = $map['longitude'];
        }
        if(isset($map['place'])){
            $model->place = $map['place'];
        }
        return $model;
    }
    /**
     * @description 纬度
     * @var string
     */
    public $latitude;

    /**
     * @description 经度
     * @var string
     */
    public $longitude;

    /**
     * @description 地址详情
     * @var string
     */
    public $place;

}
