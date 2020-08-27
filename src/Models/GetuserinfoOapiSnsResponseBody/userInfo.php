<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetuserinfoOapiSnsResponseBody;

use AlibabaCloud\Tea\Model;

class userInfo extends Model {
    protected $_name = [
        'maskedMobile' => 'maskedMobile',
        'nick' => 'nick',
        'unionid' => 'unionid',
        'openid' => 'openid',
        'dingId' => 'dingId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->maskedMobile) {
            $res['maskedMobile'] = $this->maskedMobile;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->openid) {
            $res['openid'] = $this->openid;
        }
        if (null !== $this->dingId) {
            $res['dingId'] = $this->dingId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['maskedMobile'])){
            $model->maskedMobile = $map['maskedMobile'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['openid'])){
            $model->openid = $map['openid'];
        }
        if(isset($map['dingId'])){
            $model->dingId = $map['dingId'];
        }
        return $model;
    }
    /**
     * @description maskedMobile
     * @var string
     */
    public $maskedMobile;

    /**
     * @description 用户在钉钉上面的昵称
     * @var string
     */
    public $nick;

    /**
     * @description 用户在当前开放应用所属的钉钉开放平台账号内的唯一标识
     * @var string
     */
    public $unionid;

    /**
     * @description 用户在当前开放应用内的唯一标识
     * @var string
     */
    public $openid;

    /**
     * @description 钉钉Id
     * @var string
     */
    public $dingId;

}
