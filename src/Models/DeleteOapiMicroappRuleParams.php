<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiMicroappRuleParams extends Model {
    protected $_name = [
        'agentId' => 'agentId',
        'ruleId' => 'ruleId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiMicroappRuleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentId'])){
            $model->agentId = $map['agentId'];
        }
        if(isset($map['ruleId'])){
            $model->ruleId = $map['ruleId'];
        }
        return $model;
    }
    /**
     * @description 规则所属的微应用agentId
     * @var int
     */
    public $agentId;

    /**
     * @description 被删除的规则id
     * @var int
     */
    public $ruleId;

}
