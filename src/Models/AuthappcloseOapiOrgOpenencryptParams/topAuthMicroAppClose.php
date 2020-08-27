<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AuthappcloseOapiOrgOpenencryptParams;

use AlibabaCloud\Tea\Model;

class topAuthMicroAppClose extends Model {
    protected $_name = [
        'resource' => 'resource',
        'requestid' => 'requestid',
        'agentid' => 'agentid',
        'authcode' => 'authcode',
    ];
    public function validate() {
        Model::validateRequired('resource', $this->resource, true);
        Model::validateRequired('requestid', $this->requestid, true);
        Model::validateRequired('agentid', $this->agentid, true);
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
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
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
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
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
     * @description 企业内部应用id
     * @var int
     */
    public $agentid;

    /**
     * @description 授权码
     * @var string
     */
    public $authcode;

}
