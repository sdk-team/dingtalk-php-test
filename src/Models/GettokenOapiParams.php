<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GettokenOapiParams extends Model {
    protected $_name = [
        'corpid' => 'corpid',
        'corpsecret' => 'corpsecret',
        'appkey' => 'appkey',
        'appsecret' => 'appsecret',
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
        if (null !== $this->appkey) {
            $res['appkey'] = $this->appkey;
        }
        if (null !== $this->appsecret) {
            $res['appsecret'] = $this->appsecret;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GettokenOapiParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['corpsecret'])){
            $model->corpsecret = $map['corpsecret'];
        }
        if(isset($map['appkey'])){
            $model->appkey = $map['appkey'];
        }
        if(isset($map['appsecret'])){
            $model->appsecret = $map['appsecret'];
        }
        return $model;
    }
    /**
     * @description 企业的corpid
     * @var string
     */
    public $corpid;

    /**
     * @description 企业的密钥
     * @var string
     */
    public $corpsecret;

    /**
     * @description 应用的唯一标识key
     * @var string
     */
    public $appkey;

    /**
     * @description 应用的密钥
     * @var string
     */
    public $appsecret;

}
