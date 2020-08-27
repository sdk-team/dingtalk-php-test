<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AuthappcloseOapiIsvOpenencryptParams;

use AlibabaCloud\Tea\Model;

class topAuthMicroAppClose extends Model {
    protected $_name = [
        'resource' => 'resource',
        'requestid' => 'requestid',
        'appid' => 'appid',
        'authcode' => 'authcode',
    ];
    public function validate() {
        Model::validateRequired('resource', $this->resource, true);
        Model::validateRequired('requestid', $this->requestid, true);
        Model::validateRequired('appid', $this->appid, true);
        Model::validateRequired('authcode', $this->authcode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }
        if (null !== $this->requestid) {
            $res['requestid'] = $this->requestid;
        }
        if (null !== $this->appid) {
            $res['appid'] = $this->appid;
        }
        if (null !== $this->authcode) {
            $res['authcode'] = $this->authcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return topAuthMicroAppClose
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['resource'])){
            $model->resource = $map['resource'];
        }
        if(isset($map['requestid'])){
            $model->requestid = $map['requestid'];
        }
        if(isset($map['appid'])){
            $model->appid = $map['appid'];
        }
        if(isset($map['authcode'])){
            $model->authcode = $map['authcode'];
        }
        return $model;
    }
    /**
     * @description 资源路径
     * @var string
     */
    public $resource;

    /**
     * @description 请求id
     * @var string
     */
    public $requestid;

    /**
     * @description 微应用id
     * @var int
     */
    public $appid;

    /**
     * @description 授权码
     * @var string
     */
    public $authcode;

}
