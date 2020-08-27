<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiAlitripBtripCostCenterEntityParams\rq;

use AlibabaCloud\Tea\Model;

class entityList extends Model {
    protected $_name = [
        'entityId' => 'entity_id',
        'entityType' => 'entity_type',
    ];
    public function validate() {
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('entityType', $this->entityType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->entityId) {
            $res['entity_id'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return entityList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entity_id'])){
            $model->entityId = $map['entity_id'];
        }
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        return $model;
    }
    /**
     * @description 员工/部门/角色id
     * @var string
     */
    public $entityId;

    /**
     * @description 人员类型:1员工，2部门，3角色
     * @var string
     */
    public $entityType;

}
