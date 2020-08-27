<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetvisibleSmartworkBpmsProcessResponseBody\result;

use AlibabaCloud\Tea\Model;

class processes extends Model {
    protected $_name = [
        'processCode' => 'process_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return processes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        return $model;
    }
    /**
     * @description 可见的流程模板唯一标识，最多20条
     * @var string
     */
    public $processCode;

}
