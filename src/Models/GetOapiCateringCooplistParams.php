<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiCateringCooplistParams extends Model {
    protected $_name = [
        'offSet' => 'off_set',
        'pgSize' => 'pg_size',
        'shopId' => 'shop_id',
        'coopStatus' => 'coop_status',
    ];
    public function validate() {
        Model::validateRequired('offSet', $this->offSet, true);
        Model::validateRequired('pgSize', $this->pgSize, true);
        Model::validateRequired('shopId', $this->shopId, true);
        Model::validateRequired('coopStatus', $this->coopStatus, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->offSet) {
            $res['off_set'] = $this->offSet;
        }
        if (null !== $this->pgSize) {
            $res['pg_size'] = $this->pgSize;
        }
        if (null !== $this->shopId) {
            $res['shop_id'] = $this->shopId;
        }
        if (null !== $this->coopStatus) {
            $res['coop_status'] = $this->coopStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiCateringCooplistParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['off_set'])){
            $model->offSet = $map['off_set'];
        }
        if(isset($map['pg_size'])){
            $model->pgSize = $map['pg_size'];
        }
        if(isset($map['shop_id'])){
            $model->shopId = $map['shop_id'];
        }
        if(isset($map['coop_status'])){
            $model->coopStatus = $map['coop_status'];
        }
        return $model;
    }
    /**
     * @description 数据起始index
     * @var int
     */
    public $offSet;

    /**
     * @description pageSize
     * @var int
     */
    public $pgSize;

    /**
     * @description 店铺id
     * @var string
     */
    public $shopId;

    /**
     * @description 合作状态：1-申请合作 2-已合作
     * @var int
     */
    public $coopStatus;

}
