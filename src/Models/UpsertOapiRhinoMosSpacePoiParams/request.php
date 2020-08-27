<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpsertOapiRhinoMosSpacePoiParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'categoryCode' => 'category_code',
        'categorySubCode' => 'category_sub_code',
        'poiCode' => 'poi_code',
        'poiName' => 'poi_name',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('categoryCode', $this->categoryCode, true);
        Model::validateRequired('categorySubCode', $this->categorySubCode, true);
        Model::validateRequired('poiCode', $this->poiCode, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['category_code'] = $this->categoryCode;
        }
        if (null !== $this->categorySubCode) {
            $res['category_sub_code'] = $this->categorySubCode;
        }
        if (null !== $this->poiCode) {
            $res['poi_code'] = $this->poiCode;
        }
        if (null !== $this->poiName) {
            $res['poi_name'] = $this->poiName;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['category_code'])){
            $model->categoryCode = $map['category_code'];
        }
        if(isset($map['category_sub_code'])){
            $model->categorySubCode = $map['category_sub_code'];
        }
        if(isset($map['poi_code'])){
            $model->poiCode = $map['poi_code'];
        }
        if(isset($map['poi_name'])){
            $model->poiName = $map['poi_name'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 类目code
     * @var string
     */
    public $categoryCode;

    /**
     * @description 类目子code
     * @var string
     */
    public $categorySubCode;

    /**
     * @description 兴趣点code
     * @var string
     */
    public $poiCode;

    /**
     * @description 兴趣点name
     * @var string
     */
    public $poiName;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description userid
     * @var string
     */
    public $userid;

}
