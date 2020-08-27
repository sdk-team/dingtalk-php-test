<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_rule_listOapiMicroappRuleParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'agentId' => 'agentId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_rule_listOapiMicroappRuleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['agentId'])){
            $model->agentId = $map['agentId'];
        }
        return $model;
    }
    /**
     * @description 用户在企业内的唯一标识
     * @var string
     */
    public $userid;

    /**
     * @description 微应用在企业内的id
     * @var int
     */
    public $agentId;

}
