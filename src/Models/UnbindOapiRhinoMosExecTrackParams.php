<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UnbindOapiRhinoMosExecTrackParams extends Model {
    protected $_name = [
        'entities' => 'entities',
        'entityType' => 'entity_type',
        'tenantId' => 'tenant_id',
        'trackId' => 'track_id',
        'trackType' => 'track_type',
        'workstationCode' => 'workstation_code',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('entities', $this->entities, true);
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('trackId', $this->trackId, true);
        Model::validateRequired('trackType', $this->trackType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->entities) {
            $res['entities'] = $this->entities;
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
        if (null !== $this->workstationCode) {
            $res['workstation_code'] = $this->workstationCode;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UnbindOapiRhinoMosExecTrackParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entities'])){
            if(!empty($map['entities'])){
                $model->entities = $map['entities'];
            }
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
        if(isset($map['workstation_code'])){
            $model->workstationCode = $map['workstation_code'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        return $model;
    }
    /**
     * @description 实体ID列表
     * @var array
     */
    public $entities;

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
     * @description 追踪类型，吊挂或才RF
     * @var string
     */
    public $trackType;

    /**
     * @description 工位
     * @var string
     */
    public $workstationCode;

    /**
     * @description 预留参数
     * @var string
     */
    public $userid;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

}
