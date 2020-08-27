<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InactiveOapiRhinoMosExecOperationConditionParams\inactiveOperationReq;

class InactiveOapiRhinoMosExecOperationConditionParams extends Model {
    protected $_name = [
        'inactiveOperationReq' => 'inactive_operation_req',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->inactiveOperationReq) {
            $res['inactive_operation_req'] = null !== $this->inactiveOperationReq ? $this->inactiveOperationReq->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return InactiveOapiRhinoMosExecOperationConditionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['inactive_operation_req'])){
            $model->inactiveOperationReq = inactiveOperationReq::fromMap($map['inactive_operation_req']);
        }
        return $model;
    }
    /**
     * @description 入参
     * @var inactiveOperationReq
     */
    public $inactiveOperationReq;

}
