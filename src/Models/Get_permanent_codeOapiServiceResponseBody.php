<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_permanent_codeOapiServiceResponseBody\authCorpInfo;

class Get_permanent_codeOapiServiceResponseBody extends Model {
    protected $_name = [
        'authCorpInfo' => 'auth_corp_info',
        'chPermanentCode' => 'ch_permanent_code',
        'permanentCode' => 'permanent_code',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authCorpInfo) {
            $res['auth_corp_info'] = null !== $this->authCorpInfo ? $this->authCorpInfo->toMap() : null;
        }
        if (null !== $this->chPermanentCode) {
            $res['ch_permanent_code'] = $this->chPermanentCode;
        }
        if (null !== $this->permanentCode) {
            $res['permanent_code'] = $this->permanentCode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_permanent_codeOapiServiceResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_corp_info'])){
            $model->authCorpInfo = authCorpInfo::fromMap($map['auth_corp_info']);
        }
        if(isset($map['ch_permanent_code'])){
            $model->chPermanentCode = $map['ch_permanent_code'];
        }
        if(isset($map['permanent_code'])){
            $model->permanentCode = $map['permanent_code'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 授权方企业信息
     * @var authCorpInfo
     */
    public $authCorpInfo;

    /**
     * @description 企业服务窗永久授权码，如果该套件下存在服务窗应用，会返回
     * @var string
     */
    public $chPermanentCode;

    /**
     * @description 永久授权码
     * @var string
     */
    public $permanentCode;

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

}
