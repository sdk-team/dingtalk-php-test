<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresEmployeeProcessBestdeviceParams\availableDeviceModels;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresEmployeeProcessBestdeviceParams\employeeProcessCapacityUnits;

class QueryOapiRhinoHumanresEmployeeProcessBestdeviceParams extends Model {
    protected $_name = [
        'tenantId' => 'tenant_id',
        'availableDeviceModels' => 'available_device_models',
        'employeeProcessCapacityUnits' => 'employee_process_capacity_units',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->availableDeviceModels) {
            $res['available_device_models'] = [];
            if(null !== $this->availableDeviceModels && is_array($this->availableDeviceModels)){
                $n = 0;
                foreach($this->availableDeviceModels as $item){
                    $res['available_device_models'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->employeeProcessCapacityUnits) {
            $res['employee_process_capacity_units'] = [];
            if(null !== $this->employeeProcessCapacityUnits && is_array($this->employeeProcessCapacityUnits)){
                $n = 0;
                foreach($this->employeeProcessCapacityUnits as $item){
                    $res['employee_process_capacity_units'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiRhinoHumanresEmployeeProcessBestdeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['available_device_models'])){
            if(!empty($map['available_device_models'])){
                $model->availableDeviceModels = [];
                $n = 0;
                foreach($map['available_device_models'] as $item) {
                    $model->availableDeviceModels[$n++] = null !== $item ? availableDeviceModels::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['employee_process_capacity_units'])){
            if(!empty($map['employee_process_capacity_units'])){
                $model->employeeProcessCapacityUnits = [];
                $n = 0;
                foreach($map['employee_process_capacity_units'] as $item) {
                    $model->employeeProcessCapacityUnits[$n++] = null !== $item ? employeeProcessCapacityUnits::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 租户
     * @var string
     */
    public $tenantId;

    /**
     * @description 可用设备型号
     * @var array
     */
    public $availableDeviceModels;

    /**
     * @description 人员工序关系
     * @var array
     */
    public $employeeProcessCapacityUnits;

    /**
     * @description 1
     * @var string
     */
    public $userid;

}
