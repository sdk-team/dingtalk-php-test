<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StartOapiRhinoMosExecPerformConditionalParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StartOapiRhinoMosExecPerformConditionalParams\entityCondition\entitySource;

class entityCondition extends Model {
    protected $_name = [
        'entityIds' => 'entity_ids',
        'entitySource' => 'entity_source',
        'entityType' => 'entity_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->entityIds) {
            $res['entity_ids'] = $this->entityIds;
        }
        if (null !== $this->entitySource) {
            $res['entity_source'] = null !== $this->entitySource ? $this->entitySource->toMap() : null;
        }
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return entityCondition
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['entity_ids'])){
            if(!empty($map['entity_ids'])){
                $model->entityIds = $map['entity_ids'];
            }
        }
        if(isset($map['entity_source'])){
            $model->entitySource = entitySource::fromMap($map['entity_source']);
        }
        if(isset($map['entity_type'])){
            $model->entityType = $map['entity_type'];
        }
        return $model;
    }
    /**
     * @description 实体ID列表
     * @var array
     */
    public $entityIds;

    /**
     * @description 实体来源
     * @var entitySource
     */
    public $entitySource;

    /**
     * @description 实体类型
     * @var string
     */
    public $entityType;

}
