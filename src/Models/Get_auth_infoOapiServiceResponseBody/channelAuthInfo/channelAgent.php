<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody\channelAuthInfo;

use AlibabaCloud\Tea\Model;

class channelAgent extends Model {
    protected $_name = [
        'agentName' => 'agent_name',
        'agentid' => 'agentid',
        'logoUrl' => 'logo_url',
        'appid' => 'appid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentName) {
            $res['agent_name'] = $this->agentName;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->logoUrl) {
            $res['logo_url'] = $this->logoUrl;
        }
        if (null !== $this->appid) {
            $res['appid'] = $this->appid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return channelAgent
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_name'])){
            $model->agentName = $map['agent_name'];
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['logo_url'])){
            $model->logoUrl = $map['logo_url'];
        }
        if(isset($map['appid'])){
            $model->appid = $map['appid'];
        }
        return $model;
    }
    /**
     * @description agent_name
     * @var string
     */
    public $agentName;

    /**
     * @description agentid
     * @var int
     */
    public $agentid;

    /**
     * @description logo_url
     * @var string
     */
    public $logoUrl;

    /**
     * @description appid
     * @var int
     */
    public $appid;

}
