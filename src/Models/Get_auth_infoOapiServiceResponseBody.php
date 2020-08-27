<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody\authInfo;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody\authUserInfo;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody\authCorpInfo;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody\channelAuthInfo;

class Get_auth_infoOapiServiceResponseBody extends Model {
    protected $_name = [
        'authInfo' => 'auth_info',
        'authUserInfo' => 'auth_user_info',
        'authCorpInfo' => 'auth_corp_info',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'channelAuthInfo' => 'channel_auth_info',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authInfo) {
            $res['auth_info'] = null !== $this->authInfo ? $this->authInfo->toMap() : null;
        }
        if (null !== $this->authUserInfo) {
            $res['auth_user_info'] = null !== $this->authUserInfo ? $this->authUserInfo->toMap() : null;
        }
        if (null !== $this->authCorpInfo) {
            $res['auth_corp_info'] = null !== $this->authCorpInfo ? $this->authCorpInfo->toMap() : null;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->channelAuthInfo) {
            $res['channel_auth_info'] = null !== $this->channelAuthInfo ? $this->channelAuthInfo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_auth_infoOapiServiceResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_info'])){
            $model->authInfo = authInfo::fromMap($map['auth_info']);
        }
        if(isset($map['auth_user_info'])){
            $model->authUserInfo = authUserInfo::fromMap($map['auth_user_info']);
        }
        if(isset($map['auth_corp_info'])){
            $model->authCorpInfo = authCorpInfo::fromMap($map['auth_corp_info']);
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['channel_auth_info'])){
            $model->channelAuthInfo = channelAuthInfo::fromMap($map['channel_auth_info']);
        }
        return $model;
    }
    /**
     * @description auth_info
     * @var authInfo
     */
    public $authInfo;

    /**
     * @description auth_user_info
     * @var authUserInfo
     */
    public $authUserInfo;

    /**
     * @description auth_corp_info
     * @var authCorpInfo
     */
    public $authCorpInfo;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description channel_auth_info
     * @var channelAuthInfo
     */
    public $channelAuthInfo;

}
