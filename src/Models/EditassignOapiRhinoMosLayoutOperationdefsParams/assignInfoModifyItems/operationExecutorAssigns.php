<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\EditassignOapiRhinoMosLayoutOperationdefsParams\assignInfoModifyItems;

use AlibabaCloud\Tea\Model;

class operationExecutorAssigns extends Model {
    protected $_name = [
        'executorId' => 'executor_id',
        'orderNum' => 'order_num',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->executorId) {
            $res['executor_id'] = $this->executorId;
        }
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return operationExecutorAssigns
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['executor_id'])){
            $model->executorId = $map['executor_id'];
        }
        if(isset($map['order_num'])){
            $model->orderNum = $map['order_num'];
        }
        return $model;
    }
    /**
     * @description 工序执行器ID
     * @var string
     */
    public $executorId;

    /**
     * @description 排序值
     * @var int
     */
    public $orderNum;

}
