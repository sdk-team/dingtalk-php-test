<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ApplytokenOapiSmartworkHrmFlexibleParams extends Model {
    protected $_name = [
        'optUserId' => 'opt_user_id',
        'agentid' => 'agentid',
    ];
    public function validate() {
        Model::validateRequired('optUserId', $this->optUserId, true);
        Model::validateRequired('agentid', $this->agentid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->optUserId) {
            $res['opt_user_id'] = $this->optUserId;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ApplytokenOapiSmartworkHrmFlexibleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['opt_user_id'])){
            $model->optUserId = $map['opt_user_id'];
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        return $model;
    }
    /**
     * @description 用户在企业的ID
     * @var string
     */
    public $optUserId;

    /**
     * @description 微应用在企业的AgentId，不需要自定义字段可不传
     * @var int
     */
    public $agentid;

}
