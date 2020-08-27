<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessPrinterInstanceParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'instanceId' => 'instance_id',
        'agentid' => 'agentid',
        'processCode' => 'process_code',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('processCode', $this->processCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
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
        if(isset($map['instance_id'])){
            $model->instanceId = $map['instance_id'];
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        return $model;
    }
    /**
     * @description 审批单实例编号
     * @var string
     */
    public $instanceId;

    /**
     * @description 微应用agentId
     * @var int
     */
    public $agentid;

    /**
     * @description 流程code
     * @var string
     */
    public $processCode;

}
