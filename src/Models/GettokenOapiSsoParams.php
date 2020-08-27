<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GettokenOapiSsoParams extends Model {
    protected $_name = [
        'corpid' => 'corpid',
        'corpsecret' => 'corpsecret',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->corpsecret) {
            $res['corpsecret'] = $this->corpsecret;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GettokenOapiSsoParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['corpsecret'])){
            $model->corpsecret = $map['corpsecret'];
        }
        return $model;
    }
    /**
     * @description 企业Id
     * @var string
     */
    public $corpid;

    /**
     * @description 这里必须填写专属的SSOSecret
     * @var string
     */
    public $corpsecret;

}
