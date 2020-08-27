<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyownerOapiAtsJobResponseBody\result;

use AlibabaCloud\Tea\Model;

class address extends Model {
    protected $_name = [
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'detail' => 'detail',
        'name' => 'name',
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
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return address
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['latitude'])){
            $model->latitude = $map['latitude'];
        }
        if(isset($map['longitude'])){
            $model->longitude = $map['longitude'];
        }
        if(isset($map['detail'])){
            $model->detail = $map['detail'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 经度
     * @var string
     */
    public $latitude;

    /**
     * @description 纬度
     * @var string
     */
    public $longitude;

    /**
     * @description 地点详情
     * @var string
     */
    public $detail;

    /**
     * @description 地点名
     * @var string
     */
    public $name;

}
