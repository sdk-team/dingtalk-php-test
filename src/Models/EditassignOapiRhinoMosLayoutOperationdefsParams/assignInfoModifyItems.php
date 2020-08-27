<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\EditassignOapiRhinoMosLayoutOperationdefsParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\EditassignOapiRhinoMosLayoutOperationdefsParams\assignInfoModifyItems\operationExecutorAssigns;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\EditassignOapiRhinoMosLayoutOperationdefsParams\assignInfoModifyItems\workUnits;

class assignInfoModifyItems extends Model {
    protected $_name = [
        'operationExecutorAssigns' => 'operation_executor_assigns',
        'operationExternalId' => 'operation_external_id',
        'operationUid' => 'operation_uid',
        'workUnits' => 'work_units',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->operationExecutorAssigns) {
            $res['operation_executor_assigns'] = [];
            if(null !== $this->operationExecutorAssigns && is_array($this->operationExecutorAssigns)){
                $n = 0;
                foreach($this->operationExecutorAssigns as $item){
                    $res['operation_executor_assigns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operationExternalId) {
            $res['operation_external_id'] = $this->operationExternalId;
        }
        if (null !== $this->operationUid) {
            $res['operation_uid'] = $this->operationUid;
        }
        if (null !== $this->workUnits) {
            $res['work_units'] = [];
            if(null !== $this->workUnits && is_array($this->workUnits)){
                $n = 0;
                foreach($this->workUnits as $item){
                    $res['work_units'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return assignInfoModifyItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['operation_executor_assigns'])){
            if(!empty($map['operation_executor_assigns'])){
                $model->operationExecutorAssigns = [];
                $n = 0;
                foreach($map['operation_executor_assigns'] as $item) {
                    $model->operationExecutorAssigns[$n++] = null !== $item ? operationExecutorAssigns::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['operation_external_id'])){
            $model->operationExternalId = $map['operation_external_id'];
        }
        if(isset($map['operation_uid'])){
            $model->operationUid = $map['operation_uid'];
        }
        if(isset($map['work_units'])){
            if(!empty($map['work_units'])){
                $model->workUnits = [];
                $n = 0;
                foreach($map['work_units'] as $item) {
                    $model->workUnits[$n++] = null !== $item ? workUnits::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 工序执行器分配列表
     * @var array
     */
    public $operationExecutorAssigns;

    /**
     * @description 工序外部ID
     * @var string
     */
    public $operationExternalId;

    /**
     * @description 工序唯一ID
     * @var int
     */
    public $operationUid;

    /**
     * @description 分配单元列表
     * @var array
     */
    public $workUnits;

}
