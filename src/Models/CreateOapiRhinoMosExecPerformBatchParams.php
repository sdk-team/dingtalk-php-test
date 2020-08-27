<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiRhinoMosExecPerformBatchParams\batchCreateOperationReq;

class CreateOapiRhinoMosExecPerformBatchParams extends Model {
    protected $_name = [
        'batchCreateOperationReq' => 'batch_create_operation_req',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->batchCreateOperationReq) {
            $res['batch_create_operation_req'] = null !== $this->batchCreateOperationReq ? $this->batchCreateOperationReq->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiRhinoMosExecPerformBatchParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['batch_create_operation_req'])){
            $model->batchCreateOperationReq = batchCreateOperationReq::fromMap($map['batch_create_operation_req']);
        }
        return $model;
    }
    /**
     * @description 入参
     * @var batchCreateOperationReq
     */
    public $batchCreateOperationReq;

}
