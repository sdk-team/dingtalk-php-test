<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosSpaceWorkerCheckInResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'checkInTime' => 'check_in_time',
        'checkOutTime' => 'check_out_time',
        'checkStatus' => 'check_status',
        'prodWorkstationCode' => 'prod_workstation_code',
        'tenantId' => 'tenant_id',
        'workNo' => 'work_no',
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
        if (null !== $this->prodWorkstationCode) {
            $res['prod_workstation_code'] = $this->prodWorkstationCode;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->workNo) {
            $res['work_no'] = $this->workNo;
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
        if(isset($map['prod_workstation_code'])){
            $model->prodWorkstationCode = $map['prod_workstation_code'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['work_no'])){
            $model->workNo = $map['work_no'];
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
     * @description 站位code
     * @var string
     */
    public $prodWorkstationCode;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenantId;

    /**
     * @description 工号
     * @var string
     */
    public $workNo;

}
