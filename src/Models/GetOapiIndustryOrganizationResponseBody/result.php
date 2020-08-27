<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiIndustryOrganizationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'regionLocation' => 'region_location',
        'regionId' => 'region_id',
        'regionType' => 'region_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->regionLocation) {
            $res['region_location'] = $this->regionLocation;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->regionType) {
            $res['region_type'] = $this->regionType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['region_location'])){
            $model->regionLocation = $map['region_location'];
        }
        if(isset($map['region_id'])){
            $model->regionId = $map['region_id'];
        }
        if(isset($map['region_type'])){
            $model->regionType = $map['region_type'];
        }
        return $model;
    }
    /**
     * @description 区域信息
     * @var string
     */
    public $regionLocation;

    /**
     * @description 区域id信息
     * @var string
     */
    public $regionId;

    /**
     * @description 区域类型，区/镇/村
     * @var string
     */
    public $regionType;

}
