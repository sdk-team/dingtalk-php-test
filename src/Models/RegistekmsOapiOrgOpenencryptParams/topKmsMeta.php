<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RegistekmsOapiOrgOpenencryptParams;

use AlibabaCloud\Tea\Model;

class topKmsMeta extends Model {
    protected $_name = [
        'endpoint' => 'endpoint',
        'extension' => 'extension',
        'requestid' => 'requestid',
        'agentid' => 'agentid',
        'status' => 'status',
    ];
    public function validate() {
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('requestid', $this->requestid, true);
        Model::validateRequired('agentid', $this->agentid, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->requestid) {
            $res['requestid'] = $this->requestid;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return topKmsMeta
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['endpoint'])){
            $model->endpoint = $map['endpoint'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['requestid'])){
            $model->requestid = $map['requestid'];
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description kms数据域名
     * @var string
     */
    public $endpoint;

    /**
     * @description 扩展字段,json格式
     * @var string
     */
    public $extension;

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
     * @description 0：禁用，1：启用
     * @var int
     */
    public $status;

}
