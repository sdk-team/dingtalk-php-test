<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SuggestOapiAlitripBtripFlightCityResponseBody\result;

use AlibabaCloud\Tea\Model;

class cities extends Model {
    protected $_name = [
        'code' => 'code',
        'name' => 'name',
        'distance' => 'distance',
        'travelName' => 'travel_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->distance) {
            $res['distance'] = $this->distance;
        }
        if (null !== $this->travelName) {
            $res['travel_name'] = $this->travelName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return cities
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['distance'])){
            $model->distance = $map['distance'];
        }
        if(isset($map['travel_name'])){
            $model->travelName = $map['travel_name'];
        }
        return $model;
    }
    /**
     * @description 三字码
     * @var string
     */
    public $code;

    /**
     * @description 城市名称
     * @var string
     */
    public $name;

    /**
     * @description 与搜索城市距离，单位千米，只在邻近机场推荐有值
     * @var int
     */
    public $distance;

    /**
     * @description 邻近机场城市，只在邻近机场推荐有值
     * @var string
     */
    public $travelName;

}
