<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCustomerserviceStatusParams;

use AlibabaCloud\Tea\Model;

class statusChange extends Model {
    protected $_name = [
        'buId' => 'bu_id',
        'originStatus' => 'origin_status',
        'serviceId' => 'service_id',
        'source' => 'source',
        'targetStatus' => 'target_status',
    ];
    public function validate() {
        Model::validateRequired('buId', $this->buId, true);
        Model::validateRequired('originStatus', $this->originStatus, true);
        Model::validateRequired('serviceId', $this->serviceId, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('targetStatus', $this->targetStatus, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->buId) {
            $res['bu_id'] = $this->buId;
        }
        if (null !== $this->originStatus) {
            $res['origin_status'] = $this->originStatus;
        }
        if (null !== $this->serviceId) {
            $res['service_id'] = $this->serviceId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->targetStatus) {
            $res['target_status'] = $this->targetStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return statusChange
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['bu_id'])){
            $model->buId = $map['bu_id'];
        }
        if(isset($map['origin_status'])){
            $model->originStatus = $map['origin_status'];
        }
        if(isset($map['service_id'])){
            $model->serviceId = $map['service_id'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        if(isset($map['target_status'])){
            $model->targetStatus = $map['target_status'];
        }
        return $model;
    }
    /**
     * @description 客服所在bu
     * @var string
     */
    public $buId;

    /**
     * @description 原始状态
     * @var int
     */
    public $originStatus;

    /**
     * @description 客服id
     * @var string
     */
    public $serviceId;

    /**
     * @description 客服所在系统
     * @var string
     */
    public $source;

    /**
     * @description 目标状态
     * @var int
     */
    public $targetStatus;

}
