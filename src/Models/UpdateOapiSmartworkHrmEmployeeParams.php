<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartworkHrmEmployeeParams\param;

class UpdateOapiSmartworkHrmEmployeeParams extends Model {
    protected $_name = [
        'param' => 'param',
        'agentid' => 'agentid',
    ];
    public function validate() {
        Model::validateRequired('param', $this->param, true);
        Model::validateRequired('agentid', $this->agentid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->param) {
            $res['param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiSmartworkHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['param'])){
            $model->param = param::fromMap($map['param']);
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        return $model;
    }
    /**
     * @description 添加待入职入参
     * @var param
     */
    public $param;

    /**
     * @description 微应用在企业的AgentId
     * @var int
     */
    public $agentid;

}
