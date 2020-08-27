<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InvalidbyentopOapiRhinoMosExecPerformParams\req;

use AlibabaCloud\Tea\Model;

class entityOperations extends Model {
    protected $_name = [
        'entityId' => 'entity_id',
        'operationUid' => 'operation_uid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->entityId) {
            $res['entity_id'] = $this->entityId;
        }
        if (null !== $this->operationUid) {
            $res['operation_uid'] = $this->operationUid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return entityOperations
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entity_id'])){
            $model->entityId = $map['entity_id'];
        }
        if(isset($map['operation_uid'])){
            $model->operationUid = $map['operation_uid'];
        }
        return $model;
    }
    /**
     * @description 实体ID
     * @var int
     */
    public $entityId;

    /**
     * @description 工序ID
     * @var int
     */
    public $operationUid;

}
