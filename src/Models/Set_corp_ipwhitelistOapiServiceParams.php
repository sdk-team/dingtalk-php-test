<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Set_corp_ipwhitelistOapiServiceParams extends Model {
    protected $_name = [
        'authCorpid' => 'auth_corpid',
        'ipWhitelist' => 'ip_whitelist',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authCorpid) {
            $res['auth_corpid'] = $this->authCorpid;
        }
        if (null !== $this->ipWhitelist) {
            $res['ip_whitelist'] = $this->ipWhitelist;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Set_corp_ipwhitelistOapiServiceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_corpid'])){
            $model->authCorpid = $map['auth_corpid'];
        }
        if(isset($map['ip_whitelist'])){
            if(!empty($map['ip_whitelist'])){
                $model->ipWhitelist = $map['ip_whitelist'];
            }
        }
        return $model;
    }
    /**
     * @description 授权方corpid
     * @var string
     */
    public $authCorpid;

    /**
     * @description 要为其设置的IP白名单,格式支持IP段,用星号表示,如【5.6.*.*】,代表从【5.6.0.*】到【5.6.255.*】的任意IP,在第三段设为星号时,将忽略第四段的值,注意:仅支持后两段设置为星号
     * @var array
     */
    public $ipWhitelist;

}
