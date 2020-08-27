<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CleanOapiWorkspaceTaskParams extends Model {
    protected $_name = [
        'corpId' => 'corp_id',
        'agentid' => 'agentid',
        'operatorUserid' => 'operator_userid',
    ];
    public function validate() {
        Model::validateRequired('corpId', $this->corpId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CleanOapiWorkspaceTaskParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        return $model;
    }
    /**
     * @description 企业corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 微应用agentId
     * @var int
     */
    public $agentid;

    /**
     * @description 操作者id
     * @var string
     */
    public $operatorUserid;

}
