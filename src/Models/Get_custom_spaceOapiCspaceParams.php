<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_custom_spaceOapiCspaceParams extends Model {
    protected $_name = [
        'domain' => 'domain',
        'agentId' => 'agent_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_custom_spaceOapiCspaceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['domain'])){
            $model->domain = $map['domain'];
        }
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        return $model;
    }
    /**
     * @description 企业调用时传入，需要为10个字节以内的字符串，仅可包含字母和数字，大小写不敏感
     * @var string
     */
    public $domain;

    /**
     * @description ISV调用时传入，微应用agentId
     * @var string
     */
    public $agentId;

}
