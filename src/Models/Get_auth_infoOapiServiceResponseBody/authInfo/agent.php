<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody\authInfo;

use AlibabaCloud\Tea\Model;

class agent extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'logoUrl' => 'logo_url',
        'appid' => 'appid',
        'adminList' => 'admin_list',
        'agentName' => 'agent_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->logoUrl) {
            $res['logo_url'] = $this->logoUrl;
        }
        if (null !== $this->appid) {
            $res['appid'] = $this->appid;
        }
        if (null !== $this->adminList) {
            $res['admin_list'] = $this->adminList;
        }
        if (null !== $this->agentName) {
            $res['agent_name'] = $this->agentName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return agent
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['logo_url'])){
            $model->logoUrl = $map['logo_url'];
        }
        if(isset($map['appid'])){
            $model->appid = $map['appid'];
        }
        if(isset($map['admin_list'])){
            if(!empty($map['admin_list'])){
                $model->adminList = $map['admin_list'];
            }
        }
        if(isset($map['agent_name'])){
            $model->agentName = $map['agent_name'];
        }
        return $model;
    }
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

    /**
     * @description admin_list
     * @var array
     */
    public $adminList;

    /**
     * @description agent_name
     * @var string
     */
    public $agentName;

}
