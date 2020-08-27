<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_auth_infoOapiServiceParams extends Model {
    protected $_name = [
        'suiteKey' => 'suite_key',
        'authCorpid' => 'auth_corpid',
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
        return $res;
    }
    /**
     * @param array $map
     * @return Get_auth_infoOapiServiceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['suite_key'])){
            $model->suiteKey = $map['suite_key'];
        }
        if(isset($map['auth_corpid'])){
            $model->authCorpid = $map['auth_corpid'];
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

}
