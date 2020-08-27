<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams\topGroup;

use AlibabaCloud\Tea\Model;

class positions extends Model {
    protected $_name = [
        'address' => 'address',
        'corpId' => 'corp_id',
        'latitude' => 'latitude',
        'accuracy' => 'accuracy',
        'title' => 'title',
        'longitude' => 'longitude',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->accuracy) {
            $res['accuracy'] = $this->accuracy;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return positions
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['latitude'])){
            $model->latitude = $map['latitude'];
        }
        if(isset($map['accuracy'])){
            $model->accuracy = $map['accuracy'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['longitude'])){
            $model->longitude = $map['longitude'];
        }
        return $model;
    }
    /**
     * @description 地址
     * @var string
     */
    public $address;

    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 纬度
     * @var string
     */
    public $latitude;

    /**
     * @description 精度
     * @var string
     */
    public $accuracy;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 经度
     * @var string
     */
    public $longitude;

}
