<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresEmployeeProcessBestdeviceParams;

use AlibabaCloud\Tea\Model;

class employeeProcessCapacityUnits extends Model {
    protected $_name = [
        'workNo' => 'work_no',
        'processCapacityId' => 'process_capacity_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->workNo) {
            $res['work_no'] = $this->workNo;
        }
        if (null !== $this->processCapacityId) {
            $res['process_capacity_id'] = $this->processCapacityId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return employeeProcessCapacityUnits
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['work_no'])){
            $model->workNo = $map['work_no'];
        }
        if(isset($map['process_capacity_id'])){
            $model->processCapacityId = $map['process_capacity_id'];
        }
        return $model;
    }
    /**
     * @description 工号
     * @var string
     */
    public $workNo;

    /**
     * @description 结构化工序id
     * @var int
     */
    public $processCapacityId;

}
