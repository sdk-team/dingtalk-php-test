<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_corp_tokenOapiServiceParams extends Model {
    protected $_name = [
        'authCorpid' => 'auth_corpid',
        'permanentCode' => 'permanent_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authCorpid) {
            $res['auth_corpid'] = $this->authCorpid;
        }
        if (null !== $this->permanentCode) {
            $res['permanent_code'] = $this->permanentCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_corp_tokenOapiServiceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_corpid'])){
            $model->authCorpid = $map['auth_corpid'];
        }
        if(isset($map['permanent_code'])){
            $model->permanentCode = $map['permanent_code'];
        }
        return $model;
    }
    /**
     * @description 授权方corpid
     * @var string
     */
    public $authCorpid;

    /**
     * @description 永久授权码，通过get_permanent_code获取
     * @var string
     */
    public $permanentCode;

}
