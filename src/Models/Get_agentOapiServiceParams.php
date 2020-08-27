<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_agentOapiServiceParams extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'permanentCode' => 'permanent_code',
        'authCorpid' => 'auth_corpid',
        'suiteKey' => 'suite_key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->permanentCode) {
            $res['permanent_code'] = $this->permanentCode;
        }
        if (null !== $this->authCorpid) {
            $res['auth_corpid'] = $this->authCorpid;
        }
        if (null !== $this->suiteKey) {
            $res['suite_key'] = $this->suiteKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_agentOapiServiceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['permanent_code'])){
            $model->permanentCode = $map['permanent_code'];
        }
        if(isset($map['auth_corpid'])){
            $model->authCorpid = $map['auth_corpid'];
        }
        if(isset($map['suite_key'])){
            $model->suiteKey = $map['suite_key'];
        }
        return $model;
    }
    /**
     * @description 授权企业方应用id
     * @var string
     */
    public $agentid;

    /**
     * @description 永久授权码
     * @var string
     */
    public $permanentCode;

    /**
     * @description 授权企业方corpid
     * @var string
     */
    public $authCorpid;

    /**
     * @description 应用套件key
     * @var string
     */
    public $suiteKey;

}
