<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RemoveOapiTdpProjectMemberParams extends Model {
    protected $_name = [
        'microappAgentId' => 'microapp_agent_id',
        'operatorUserid' => 'operator_userid',
        'memberId' => 'member_id',
    ];
    public function validate() {
        Model::validateRequired('operatorUserid', $this->operatorUserid, true);
        Model::validateRequired('memberId', $this->memberId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        if (null !== $this->memberId) {
            $res['member_id'] = $this->memberId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RemoveOapiTdpProjectMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
        }
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        if(isset($map['member_id'])){
            $model->memberId = $map['member_id'];
        }
        return $model;
    }
    /**
     * @description 微应用agentId
     * @var int
     */
    public $microappAgentId;

    /**
     * @description 操作者id
     * @var string
     */
    public $operatorUserid;

    /**
     * @description 成员ID
     * @var string
     */
    public $memberId;

}
