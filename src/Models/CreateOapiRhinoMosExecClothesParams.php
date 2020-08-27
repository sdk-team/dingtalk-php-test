<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecClothesParams\additionalOperations;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecClothesParams\source;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecClothesParams\clothes;

class CreateOapiRhinoMosExecClothesParams extends Model {
    protected $_name = [
        'additionalOperations' => 'additional_operations',
        'autoStart' => 'auto_start',
        'entityType' => 'entity_type',
        'orderId' => 'order_id',
        'source' => 'source',
        'tenantId' => 'tenant_id',
        'userid' => 'userid',
        'clothes' => 'clothes',
        'bizType' => 'biz_type',
    ];
    public function validate() {
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('source', $this->source, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->additionalOperations) {
            $res['additional_operations'] = [];
            if(null !== $this->additionalOperations && is_array($this->additionalOperations)){
                $n = 0;
                foreach($this->additionalOperations as $item){
                    $res['additional_operations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoStart) {
            $res['auto_start'] = $this->autoStart;
        }
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->clothes) {
            $res['clothes'] = [];
            if(null !== $this->clothes && is_array($this->clothes)){
                $n = 0;
                foreach($this->clothes as $item){
                    $res['clothes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiRhinoMosExecClothesParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['additional_operations'])){
            if(!empty($map['additional_operations'])){
                $model->additionalOperations = [];
                $n = 0;
                foreach($map['additional_operations'] as $item) {
                    $model->additionalOperations[$n++] = null !== $item ? additionalOperations::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['auto_start'])){
            $model->autoStart = $map['auto_start'];
        }
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['source'])){
            $model->source = source::fromMap($map['source']);
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['clothes'])){
            if(!empty($map['clothes'])){
                $model->clothes = [];
                $n = 0;
                foreach($map['clothes'] as $item) {
                    $model->clothes[$n++] = null !== $item ? clothes::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        return $model;
    }
    /**
     * @description 工序信息
     * @var array
     */
    public $additionalOperations;

    /**
     * @description 衣服状态是否自动开启
     * @var bool
     */
    public $autoStart;

    /**
     * @description 实体类型
     * @var string
     */
    public $entityType;

    /**
     * @description 订单ID
     * @var int
     */
    public $orderId;

    /**
     * @description 来源
     * @var source
     */
    public $source;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 业务参数[这里先预留],这里是用户ID,比如钉钉用户ID
     * @var string
     */
    public $userid;

    /**
     * @description 衣服详情
     * @var array
     */
    public $clothes;

    /**
     * @description 业务类型
     * @var string
     */
    public $bizType;

}
