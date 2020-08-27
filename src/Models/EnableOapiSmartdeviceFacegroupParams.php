<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class EnableOapiSmartdeviceFacegroupParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'enable' => 'enable',
        'deviceIds' => 'device_ids',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('enable', $this->enable, true);
        Model::validateMaxLength('bizId', $this->bizId, 23);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->deviceIds) {
            $res['device_ids'] = $this->deviceIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return EnableOapiSmartdeviceFacegroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['enable'])){
            $model->enable = $map['enable'];
        }
        if(isset($map['device_ids'])){
            if(!empty($map['device_ids'])){
                $model->deviceIds = $map['device_ids'];
            }
        }
        return $model;
    }
    /**
     * @description 业务id
     * @var string
     */
    public $bizId;

    /**
     * @description true-启用识别；false-禁用识别
     * @var bool
     */
    public $enable;

    /**
     * @description 设备id列表
     * @var array
     */
    public $deviceIds;

}
