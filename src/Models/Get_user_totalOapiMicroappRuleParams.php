<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_user_totalOapiMicroappRuleParams extends Model {
    protected $_name = [
        'agentId' => 'agentId',
        'ruleIdList' => 'ruleIdList',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->ruleIdList) {
            $res['ruleIdList'] = $this->ruleIdList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_user_totalOapiMicroappRuleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentId'])){
            $model->agentId = $map['agentId'];
        }
        if(isset($map['ruleIdList'])){
            if(!empty($map['ruleIdList'])){
                $model->ruleIdList = $map['ruleIdList'];
            }
        }
        return $model;
    }
    /**
     * @description 规则所属的微应用agentId
     * @var int
     */
    public $agentId;

    /**
     * @description 需要查询的规则id集合
     * @var array
     */
    public $ruleIdList;

}
