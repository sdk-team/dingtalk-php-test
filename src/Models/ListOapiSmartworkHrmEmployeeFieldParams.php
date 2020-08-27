<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiSmartworkHrmEmployeeFieldParams extends Model {
    protected $_name = [
        'agentid' => 'agentid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiSmartworkHrmEmployeeFieldParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        return $model;
    }
    /**
     * @description 微应用在企业的AgentId，不需要自定义字段可不传
     * @var int
     */
    public $agentid;

}
