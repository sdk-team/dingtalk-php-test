<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QuerytagOapiDingpayBillParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'dayRange' => 'day_range',
        'sourceAppId' => 'source_app_id',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('dayRange', $this->dayRange, true);
        Model::validateRequired('sourceAppId', $this->sourceAppId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->dayRange) {
            $res['day_range'] = $this->dayRange;
        }
        if (null !== $this->sourceAppId) {
            $res['source_app_id'] = $this->sourceAppId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QuerytagOapiDingpayBillParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['day_range'])){
            $model->dayRange = $map['day_range'];
        }
        if(isset($map['source_app_id'])){
            $model->sourceAppId = $map['source_app_id'];
        }
        return $model;
    }
    /**
     * @description 业务代码
     * @var string
     */
    public $bizCode;

    /**
     * @description 查询最近几天的标签
     * @var int
     */
    public $dayRange;

    /**
     * @description 标签来源应用ID
     * @var string
     */
    public $sourceAppId;

}
