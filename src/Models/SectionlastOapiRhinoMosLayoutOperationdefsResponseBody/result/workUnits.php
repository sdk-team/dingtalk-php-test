<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SectionlastOapiRhinoMosLayoutOperationdefsResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SectionlastOapiRhinoMosLayoutOperationdefsResponseBody\result\workUnits\deviceAssigns;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SectionlastOapiRhinoMosLayoutOperationdefsResponseBody\result\workUnits\workerAssigns;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SectionlastOapiRhinoMosLayoutOperationdefsResponseBody\result\workUnits\workstationAssigns;

class workUnits extends Model {
    protected $_name = [
        'deviceAssigns' => 'device_assigns',
        'workerAssigns' => 'worker_assigns',
        'workstationAssigns' => 'workstation_assigns',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceAssigns) {
            $res['device_assigns'] = [];
            if(null !== $this->deviceAssigns && is_array($this->deviceAssigns)){
                $n = 0;
                foreach($this->deviceAssigns as $item){
                    $res['device_assigns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workerAssigns) {
            $res['worker_assigns'] = [];
            if(null !== $this->workerAssigns && is_array($this->workerAssigns)){
                $n = 0;
                foreach($this->workerAssigns as $item){
                    $res['worker_assigns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workstationAssigns) {
            $res['workstation_assigns'] = [];
            if(null !== $this->workstationAssigns && is_array($this->workstationAssigns)){
                $n = 0;
                foreach($this->workstationAssigns as $item){
                    $res['workstation_assigns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return workUnits
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_assigns'])){
            if(!empty($map['device_assigns'])){
                $model->deviceAssigns = [];
                $n = 0;
                foreach($map['device_assigns'] as $item) {
                    $model->deviceAssigns[$n++] = null !== $item ? deviceAssigns::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['worker_assigns'])){
            if(!empty($map['worker_assigns'])){
                $model->workerAssigns = [];
                $n = 0;
                foreach($map['worker_assigns'] as $item) {
                    $model->workerAssigns[$n++] = null !== $item ? workerAssigns::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['workstation_assigns'])){
            if(!empty($map['workstation_assigns'])){
                $model->workstationAssigns = [];
                $n = 0;
                foreach($map['workstation_assigns'] as $item) {
                    $model->workstationAssigns[$n++] = null !== $item ? workstationAssigns::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 设备分配列表
     * @var array
     */
    public $deviceAssigns;

    /**
     * @description 人员分配列表
     * @var array
     */
    public $workerAssigns;

    /**
     * @description 站位分配
     * @var array
     */
    public $workstationAssigns;

}
