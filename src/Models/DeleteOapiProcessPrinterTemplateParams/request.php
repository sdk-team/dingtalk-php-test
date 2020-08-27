<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiProcessPrinterTemplateParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'processCode' => 'process_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        return $model;
    }
    /**
     * @description 微应用agentId，ISV必填
     * @var int
     */
    public $agentId;

    /**
     * @description 流程code
     * @var string
     */
    public $processCode;

}
