<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Getuserinfo_bycodeOapiSnsResponseBody;

use AlibabaCloud\Tea\Model;

class userInfo extends Model {
    protected $_name = [
        'nick' => 'nick',
        'unionid' => 'unionid',
        'openid' => 'openid',
        'mainOrgAuthHighLevel' => 'main_org_auth_high_level',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->openid) {
            $res['openid'] = $this->openid;
        }
        if (null !== $this->mainOrgAuthHighLevel) {
            $res['main_org_auth_high_level'] = $this->mainOrgAuthHighLevel;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['openid'])){
            $model->openid = $map['openid'];
        }
        if(isset($map['main_org_auth_high_level'])){
            $model->mainOrgAuthHighLevel = $map['main_org_auth_high_level'];
        }
        return $model;
    }
    /**
     * @description nick
     * @var string
     */
    public $nick;

    /**
     * @description unionid
     * @var string
     */
    public $unionid;

    /**
     * @description openid
     * @var string
     */
    public $openid;

    /**
     * @description 用户主企业是否达到高级认证级别
     * @var bool
     */
    public $mainOrgAuthHighLevel;

}
