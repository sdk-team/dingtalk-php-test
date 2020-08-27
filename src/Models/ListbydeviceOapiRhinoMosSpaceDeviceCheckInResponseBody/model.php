<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbydeviceOapiRhinoMosSpaceDeviceCheckInResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'prodWorkstationCode' => 'prod_workstation_code',
        'checkStatus' => 'check_status',
        'checkOutTime' => 'check_out_time',
        'checkInTime' => 'check_in_time',
        'tenantId' => 'tenant_id',
        'deviceId' => 'device_id',
    ];
    public function validate() {
        Model::validatePattern('checkOutTime', $this->checkOutTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('checkInTime', $this->checkInTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->prodWorkstationCode) {
            $res['prod_workstation_code'] = $this->prodWorkstationCode;
        }
        if (null !== $this->checkStatus) {
            $res['check_status'] = $this->checkStatus;
        }
        if (null !== $this->checkOutTime) {
            $res['check_out_time'] = $this->checkOutTime;
        }
        if (null !== $this->checkInTime) {
            $res['check_in_time'] = $this->checkInTime;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['prod_workstation_code'])){
            $model->prodWorkstationCode = $map['prod_workstation_code'];
        }
        if(isset($map['check_status'])){
            $model->checkStatus = $map['check_status'];
        }
        if(isset($map['check_out_time'])){
            $model->checkOutTime = $map['check_out_time'];
        }
        if(isset($map['check_in_time'])){
            $model->checkInTime = $map['check_in_time'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        return $model;
    }
    /**
     * @description 站位code
     * @var string
     */
    public $prodWorkstationCode;

    /**
     * @description 登入登出状态
     * @var string
     */
    public $checkStatus;

    /**
     * @description 登出时间
     * @var string
     */
    public $checkOutTime;

    /**
     * @description 登入时间
     * @var string
     */
    public $checkInTime;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description device_id
     * @var int
     */
    public $deviceId;

}
