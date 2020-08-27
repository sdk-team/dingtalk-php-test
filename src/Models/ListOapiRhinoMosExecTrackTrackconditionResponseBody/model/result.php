<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosExecTrackTrackconditionResponseBody\model;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'effectEndTime' => 'effect_end_time',
        'effectStartTime' => 'effect_start_time',
        'effectStatus' => 'effect_status',
        'entityId' => 'entity_id',
        'entityType' => 'entity_type',
        'tenantId' => 'tenant_id',
        'trackId' => 'track_id',
        'trackType' => 'track_type',
        'effectStartWorkstationCode' => 'effect_start_workstation_code',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validatePattern('effectEndTime', $this->effectEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('effectStartTime', $this->effectStartTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->effectEndTime) {
            $res['effect_end_time'] = $this->effectEndTime;
        }
        if (null !== $this->effectStartTime) {
            $res['effect_start_time'] = $this->effectStartTime;
        }
        if (null !== $this->effectStatus) {
            $res['effect_status'] = $this->effectStatus;
        }
        if (null !== $this->entityId) {
            $res['entity_id'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->trackId) {
            $res['track_id'] = $this->trackId;
        }
        if (null !== $this->trackType) {
            $res['track_type'] = $this->trackType;
        }
        if (null !== $this->effectStartWorkstationCode) {
            $res['effect_start_workstation_code'] = $this->effectStartWorkstationCode;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['effect_end_time'])){
            $model->effectEndTime = $map['effect_end_time'];
        }
        if(isset($map['effect_start_time'])){
            $model->effectStartTime = $map['effect_start_time'];
        }
        if(isset($map['effect_status'])){
            $model->effectStatus = $map['effect_status'];
        }
        if(isset($map['entity_id'])){
            $model->entityId = $map['entity_id'];
        }
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['track_id'])){
            $model->trackId = $map['track_id'];
        }
        if(isset($map['track_type'])){
            $model->trackType = $map['track_type'];
        }
        if(isset($map['effect_start_workstation_code'])){
            $model->effectStartWorkstationCode = $map['effect_start_workstation_code'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        return $model;
    }
    /**
     * @description 生效结束时间
     * @var string
     */
    public $effectEndTime;

    /**
     * @description 生效开始时间
     * @var string
     */
    public $effectStartTime;

    /**
     * @description 生效状态
     * @var string
     */
    public $effectStatus;

    /**
     * @description 实体ID
     * @var int
     */
    public $entityId;

    /**
     * @description 实体类型
     * @var string
     */
    public $entityType;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 追踪ID
     * @var string
     */
    public $trackId;

    /**
     * @description 追踪类型
     * @var string
     */
    public $trackType;

    /**
     * @description 生效工位
     * @var string
     */
    public $effectStartWorkstationCode;

    /**
     * @description 订单id
     * @var int
     */
    public $orderId;

}
