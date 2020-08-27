<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiAlitripBtripReimbursementParams extends Model {
    protected $_name = [
        'corpid' => 'corpid',
        'thirdpartyFlowId' => 'thirdparty_flow_id',
    ];
    public function validate() {
        Model::validateRequired('corpid', $this->corpid, true);
        Model::validateRequired('thirdpartyFlowId', $this->thirdpartyFlowId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->thirdpartyFlowId) {
            $res['thirdparty_flow_id'] = $this->thirdpartyFlowId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiAlitripBtripReimbursementParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['thirdparty_flow_id'])){
            $model->thirdpartyFlowId = $map['thirdparty_flow_id'];
        }
        return $model;
    }
    /**
     * @description corp id
     * @var string
     */
    public $corpid;

    /**
     * @description 第三方流程id
     * @var string
     */
    public $thirdpartyFlowId;

}
