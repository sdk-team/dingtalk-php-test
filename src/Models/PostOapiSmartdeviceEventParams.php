<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\PostOapiSmartdeviceEventParams\deviceEventVo;

class PostOapiSmartdeviceEventParams extends Model {
    protected $_name = [
        'deviceEventVo' => 'device_event_vo',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceEventVo) {
            $res['device_event_vo'] = null !== $this->deviceEventVo ? $this->deviceEventVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PostOapiSmartdeviceEventParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_event_vo'])){
            $model->deviceEventVo = deviceEventVo::fromMap($map['device_event_vo']);
        }
        return $model;
    }
    /**
     * @description 系统自动生成
     * @var deviceEventVo
     */
    public $deviceEventVo;

}
