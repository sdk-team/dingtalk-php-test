<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_by_deptidOapiSmartdeviceAtmachineResponseBody\result;

use AlibabaCloud\Tea\Model;

class machineList extends Model {
    protected $_name = [
        'deviceid' => 'deviceid',
        'deviceName' => 'device_name',
        'productName' => 'product_name',
        'devid' => 'devid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceid) {
            $res['deviceid'] = $this->deviceid;
        }
        if (null !== $this->deviceName) {
            $res['device_name'] = $this->deviceName;
        }
        if (null !== $this->productName) {
            $res['product_name'] = $this->productName;
        }
        if (null !== $this->devid) {
            $res['devid'] = $this->devid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return machineList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['deviceid'])){
            $model->deviceid = $map['deviceid'];
        }
        if(isset($map['device_name'])){
            $model->deviceName = $map['device_name'];
        }
        if(isset($map['product_name'])){
            $model->productName = $map['product_name'];
        }
        if(isset($map['devid'])){
            $model->devid = $map['devid'];
        }
        return $model;
    }
    /**
     * @description 考勤机唯一标识id，字符串类型
     * @var string
     */
    public $deviceid;

    /**
     * @description 考勤机名称
     * @var string
     */
    public $deviceName;

    /**
     * @description 考勤机类型名称
     * @var string
     */
    public $productName;

    /**
     * @description 考勤机唯一标识id，Long类型
     * @var int
     */
    public $devid;

}
