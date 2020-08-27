<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiProcessFormConditionParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processCode' => 'process_code',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
    }
    public function toMap() {
        $res = [];
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
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        return $model;
    }
    /**
     * @description 应用id
     * @var int
     */
    public $agentid;

    /**
     * @description 审批模板id
     * @var string
     */
    public $processCode;

}
