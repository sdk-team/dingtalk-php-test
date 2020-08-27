<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CloseOapiCustomerserviceSessionParams;

use AlibabaCloud\Tea\Model;

class closeSession extends Model {
    protected $_name = [
        'buId' => 'bu_id',
        'operatorId' => 'operator_id',
        'reason' => 'reason',
        'sessionSource' => 'session_source',
        'sid' => 'sid',
    ];
    public function validate() {
        Model::validateRequired('buId', $this->buId, true);
        Model::validateRequired('operatorId', $this->operatorId, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('sessionSource', $this->sessionSource, true);
        Model::validateRequired('sid', $this->sid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->buId) {
            $res['bu_id'] = $this->buId;
        }
        if (null !== $this->operatorId) {
            $res['operator_id'] = $this->operatorId;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->sessionSource) {
            $res['session_source'] = $this->sessionSource;
        }
        if (null !== $this->sid) {
            $res['sid'] = $this->sid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return closeSession
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['bu_id'])){
            $model->buId = $map['bu_id'];
        }
        if(isset($map['operator_id'])){
            $model->operatorId = $map['operator_id'];
        }
        if(isset($map['reason'])){
            $model->reason = $map['reason'];
        }
        if(isset($map['session_source'])){
            $model->sessionSource = $map['session_source'];
        }
        if(isset($map['sid'])){
            $model->sid = $map['sid'];
        }
        return $model;
    }
    /**
     * @description 客服所在bu
     * @var string
     */
    public $buId;

    /**
     * @description 操作者id
     * @var string
     */
    public $operatorId;

    /**
     * @description 关闭原因，memberIsSilent/heartBeatBreak/memberCloseTheSession
     * @var string
     */
    public $reason;

    /**
     * @description 会话来源
     * @var string
     */
    public $sessionSource;

    /**
     * @description 会话id
     * @var string
     */
    public $sid;

}
