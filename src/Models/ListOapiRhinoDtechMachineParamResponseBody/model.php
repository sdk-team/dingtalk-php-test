<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRhinoDtechMachineParamResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'machineCode' => 'machine_code',
        'name' => 'name',
        'description' => 'description',
        'machineVersion' => 'machine_version',
        'bizIdProcess' => 'biz_id_process',
        'type' => 'type',
        'value' => 'value',
        'machineName' => 'machine_name',
        'bizIdMachineParam' => 'biz_id_machine_param',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->machineCode) {
            $res['machine_code'] = $this->machineCode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->machineVersion) {
            $res['machine_version'] = $this->machineVersion;
        }
        if (null !== $this->bizIdProcess) {
            $res['biz_id_process'] = $this->bizIdProcess;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->machineName) {
            $res['machine_name'] = $this->machineName;
        }
        if (null !== $this->bizIdMachineParam) {
            $res['biz_id_machine_param'] = $this->bizIdMachineParam;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['machine_code'])){
            $model->machineCode = $map['machine_code'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['machine_version'])){
            $model->machineVersion = $map['machine_version'];
        }
        if(isset($map['biz_id_process'])){
            $model->bizIdProcess = $map['biz_id_process'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['machine_name'])){
            $model->machineName = $map['machine_name'];
        }
        if(isset($map['biz_id_machine_param'])){
            $model->bizIdMachineParam = $map['biz_id_machine_param'];
        }
        return $model;
    }
    /**
     * @description 设备编码
     * @var string
     */
    public $machineCode;

    /**
     * @description 设备名称
     * @var string
     */
    public $name;

    /**
     * @description 描述
     * @var string
     */
    public $description;

    /**
     * @description 版本
     * @var string
     */
    public $machineVersion;

    /**
     * @description 工序bizid
     * @var string
     */
    public $bizIdProcess;

    /**
     * @description 类型
     * @var int
     */
    public $type;

    /**
     * @description 参数值
     * @var string
     */
    public $value;

    /**
     * @description 设备名称
     * @var string
     */
    public $machineName;

    /**
     * @description 设备参数bizid
     * @var string
     */
    public $bizIdMachineParam;

}
