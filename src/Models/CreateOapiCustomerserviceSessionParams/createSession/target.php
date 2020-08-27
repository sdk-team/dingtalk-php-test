<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceSessionParams\createSession;

use AlibabaCloud\Tea\Model;

class target extends Model {
    protected $_name = [
        'buId' => 'bu_id',
        'serviceId' => 'service_id',
        'sessionSource' => 'session_source',
    ];
    public function validate() {
        Model::validateRequired('buId', $this->buId, true);
        Model::validateRequired('serviceId', $this->serviceId, true);
        Model::validateRequired('sessionSource', $this->sessionSource, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->buId) {
            $res['bu_id'] = $this->buId;
        }
        if (null !== $this->serviceId) {
            $res['service_id'] = $this->serviceId;
        }
        if (null !== $this->sessionSource) {
            $res['session_source'] = $this->sessionSource;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return target
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['bu_id'])){
            $model->buId = $map['bu_id'];
        }
        if(isset($map['service_id'])){
            $model->serviceId = $map['service_id'];
        }
        if(isset($map['session_source'])){
            $model->sessionSource = $map['session_source'];
        }
        return $model;
    }
    /**
     * @description 业务单元id
     * @var string
     */
    public $buId;

    /**
     * @description 服务编号
     * @var string
     */
    public $serviceId;

    /**
     * @description 会话来源
     * @var string
     */
    public $sessionSource;

}
