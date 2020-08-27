<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoMosLayoutOperationdefsResponseBody\result\workUnits;

use AlibabaCloud\Tea\Model;

class workerAssigns extends Model {
    protected $_name = [
        'name' => 'name',
        'workNo' => 'work_no',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->workNo) {
            $res['work_no'] = $this->workNo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return workerAssigns
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['work_no'])){
            $model->workNo = $map['work_no'];
        }
        return $model;
    }
    /**
     * @description 姓名
     * @var string
     */
    public $name;

    /**
     * @description 工号
     * @var string
     */
    public $workNo;

}
