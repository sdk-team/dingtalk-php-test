<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiRhinoCooperationCarrierParams extends Model {
    protected $_name = [
        'tenantId' => 'tenant_id',
        'carrierId' => 'carrier_id',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->carrierId) {
            $res['carrier_id'] = $this->carrierId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiRhinoCooperationCarrierParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['carrier_id'])){
            $model->carrierId = $map['carrier_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 租户id
     * @var string
     */
    public $tenantId;

    /**
     * @description 载具id
     * @var int
     */
    public $carrierId;

    /**
     * @description 业务参数[这里先预留],这里是用户ID,比如钉钉用户ID
     * @var string
     */
    public $userid;

}
