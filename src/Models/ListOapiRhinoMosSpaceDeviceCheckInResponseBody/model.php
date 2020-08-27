<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosSpaceDeviceCheckInResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'checkInTime' => 'check_in_time',
        'checkOutTime' => 'check_out_time',
        'checkStatus' => 'check_status',
        'deviceId' => 'device_id',
        'prodWorkstationCode' => 'prod_workstation_code',
        'tenantId' => 'tenant_id',
    ];
    public function validate() {
        Model::validatePattern('checkInTime', $this->checkInTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('checkOutTime', $this->checkOutTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkInTime) {
            $res['check_in_time'] = $this->checkInTime;
        }
        if (null !== $this->checkOutTime) {
            $res['check_out_time'] = $this->checkOutTime;
        }
        if (null !== $this->checkStatus) {
            $res['check_status'] = $this->checkStatus;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->prodWorkstationCode) {
            $res['prod_workstation_code'] = $this->prodWorkstationCode;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_in_time'])){
            $model->checkInTime = $map['check_in_time'];
        }
        if(isset($map['check_out_time'])){
            $model->checkOutTime = $map['check_out_time'];
        }
        if(isset($map['check_status'])){
            $model->checkStatus = $map['check_status'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['prod_workstation_code'])){
            $model->prodWorkstationCode = $map['prod_workstation_code'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        return $model;
    }
    /**
     * @description 登入时间
     * @var string
     */
    public $checkInTime;

    /**
     * @description 登出时间
     * @var string
     */
    public $checkOutTime;

    /**
     * @description 登入登出状态
     * @var string
     */
    public $checkStatus;

    /**
     * @description device_id
     * @var int
     */
    public $deviceId;

    /**
     * @description 站位code
     * @var string
     */
    public $prodWorkstationCode;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

}
