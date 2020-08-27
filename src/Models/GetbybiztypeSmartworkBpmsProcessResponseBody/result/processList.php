<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbybiztypeSmartworkBpmsProcessResponseBody\result;

use AlibabaCloud\Tea\Model;

class processList extends Model {
    protected $_name = [
        'processCode' => 'process_code',
        'processName' => 'process_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->processName) {
            $res['process_name'] = $this->processName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return processList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['process_name'])){
            $model->processName = $map['process_name'];
        }
        return $model;
    }
    /**
     * @description 流程模板唯一标识
     * @var string
     */
    public $processCode;

    /**
     * @description 流程模板名称
     * @var string
     */
    public $processName;

}
