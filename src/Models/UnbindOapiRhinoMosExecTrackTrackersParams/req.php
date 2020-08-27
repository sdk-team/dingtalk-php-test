<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UnbindOapiRhinoMosExecTrackTrackersParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'entityType' => 'entity_type',
        'tenantId' => 'tenant_id',
        'trackIds' => 'track_ids',
        'trackType' => 'track_type',
        'userid' => 'userid',
        'orderId' => 'order_id',
    ];
    public function validate() {
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('trackIds', $this->trackIds, true);
        Model::validateRequired('trackType', $this->trackType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->trackIds) {
            $res['track_ids'] = $this->trackIds;
        }
        if (null !== $this->trackType) {
            $res['track_type'] = $this->trackType;
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
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['track_ids'])){
            if(!empty($map['track_ids'])){
                $model->trackIds = $map['track_ids'];
            }
        }
        if(isset($map['track_type'])){
            $model->trackType = $map['track_type'];
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
     * @var array
     */
    public $trackIds;

    /**
     * @description 追踪类型
     * @var string
     */
    public $trackType;

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
