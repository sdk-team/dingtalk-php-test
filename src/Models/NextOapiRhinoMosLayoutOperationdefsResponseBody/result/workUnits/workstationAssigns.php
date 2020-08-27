<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\NextOapiRhinoMosLayoutOperationdefsResponseBody\result\workUnits;

use AlibabaCloud\Tea\Model;

class workstationAssigns extends Model {
    protected $_name = [
        'workstationCode' => 'workstation_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->workstationCode) {
            $res['workstation_code'] = $this->workstationCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return workstationAssigns
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['workstation_code'])){
            $model->workstationCode = $map['workstation_code'];
        }
        return $model;
    }
    /**
     * @description 站位编码
     * @var string
     */
    public $workstationCode;

}
