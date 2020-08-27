<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Activate_suiteOapiServiceParams extends Model {
    protected $_name = [
        'suiteKey' => 'suite_key',
        'authCorpid' => 'auth_corpid',
        'permanentCode' => 'permanent_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->suiteKey) {
            $res['suite_key'] = $this->suiteKey;
        }
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
     * @return Activate_suiteOapiServiceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['suite_key'])){
            $model->suiteKey = $map['suite_key'];
        }
        if(isset($map['auth_corpid'])){
            $model->authCorpid = $map['auth_corpid'];
        }
        if(isset($map['permanent_code'])){
            $model->permanentCode = $map['permanent_code'];
        }
        return $model;
    }
    /**
     * @description 套件key
     * @var string
     */
    public $suiteKey;

    /**
     * @description 授权方corpid
     * @var string
     */
    public $authCorpid;

    /**
     * @description 永久授权码，从get_permanent_code接口中获取
     * @var string
     */
    public $permanentCode;

}
