<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiRhinoMosExecPerformContextResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'context' => 'context',
        'operationRecordId' => 'operation_record_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = $this->context;
        }
        if (null !== $this->operationRecordId) {
            $res['operation_record_id'] = $this->operationRecordId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['context'])){
            $model->context = $map['context'];
        }
        if(isset($map['operation_record_id'])){
            $model->operationRecordId = $map['operation_record_id'];
        }
        return $model;
    }
    /**
     * @description 上下文
     * @var string
     */
    public $context;

    /**
     * @description 工序执行ID
     * @var int
     */
    public $operationRecordId;

}
