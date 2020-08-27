<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\HeartbeatOapiOrgOpenencryptParams;

use AlibabaCloud\Tea\Model;

class topKmsHeartbeat extends Model {
    protected $_name = [
        'requestid' => 'requestid',
        'payload' => 'payload',
        'agentid' => 'agentid',
    ];
    public function validate() {
        Model::validateRequired('requestid', $this->requestid, true);
        Model::validateRequired('agentid', $this->agentid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->requestid) {
            $res['requestid'] = $this->requestid;
        }
        if (null !== $this->payload) {
            $res['payload'] = $this->payload;
        }
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return topKmsHeartbeat
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['requestid'])){
            $model->requestid = $map['requestid'];
        }
        if(isset($map['payload'])){
            $model->payload = $map['payload'];
        }
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        return $model;
    }
    /**
     * @description 请求id
     * @var string
     */
    public $requestid;

    /**
     * @description 附加数据，json格式
     * @var string
     */
    public $payload;

    /**
     * @description 企业内部应用id
     * @var int
     */
    public $agentid;

}
