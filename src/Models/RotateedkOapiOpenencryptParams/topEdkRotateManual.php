<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RotateedkOapiOpenencryptParams;

use AlibabaCloud\Tea\Model;

class topEdkRotateManual extends Model {
    protected $_name = [
        'resource' => 'resource',
        'requestid' => 'requestid',
        'agentid' => 'agentid',
    ];
    public function validate() {
        Model::validateRequired('resource', $this->resource, true);
        Model::validateRequired('requestid', $this->requestid, true);
        Model::validateRequired('agentid', $this->agentid, true);
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
        return $res;
    }
    /**
     * @param array $map
     * @return topEdkRotateManual
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

}
