<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InitOapiAlitripBtripReimbursementResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model {
    protected $_name = [
        'flowNo' => 'flow_no',
        'thirdpartyFlowId' => 'thirdparty_flow_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->flowNo) {
            $res['flow_no'] = $this->flowNo;
        }
        if (null !== $this->thirdpartyFlowId) {
            $res['thirdparty_flow_id'] = $this->thirdpartyFlowId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return module
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['flow_no'])){
            $model->flowNo = $map['flow_no'];
        }
        if(isset($map['thirdparty_flow_id'])){
            $model->thirdpartyFlowId = $map['thirdparty_flow_id'];
        }
        return $model;
    }
    /**
     * @description 报销单号
     * @var int
     */
    public $flowNo;

    /**
     * @description 第三方流程编号
     * @var string
     */
    public $thirdpartyFlowId;

}
