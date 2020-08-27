<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiSmartdeviceDeviceParams\deviceQueryVo;

class QueryOapiSmartdeviceDeviceParams extends Model {
    protected $_name = [
        'deviceQueryVo' => 'device_query_vo',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceQueryVo) {
            $res['device_query_vo'] = null !== $this->deviceQueryVo ? $this->deviceQueryVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiSmartdeviceDeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_query_vo'])){
            $model->deviceQueryVo = deviceQueryVo::fromMap($map['device_query_vo']);
        }
        return $model;
    }
    /**
     * @description 设备查询对象
     * @var deviceQueryVo
     */
    public $deviceQueryVo;

}
