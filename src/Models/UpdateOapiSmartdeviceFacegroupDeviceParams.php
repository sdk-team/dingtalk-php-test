<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiSmartdeviceFacegroupDeviceParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'addDeviceIds' => 'add_device_ids',
        'delDeviceIds' => 'del_device_ids',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateMaxLength('bizId', $this->bizId, 23);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->addDeviceIds) {
            $res['add_device_ids'] = $this->addDeviceIds;
        }
        if (null !== $this->delDeviceIds) {
            $res['del_device_ids'] = $this->delDeviceIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiSmartdeviceFacegroupDeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['add_device_ids'])){
            if(!empty($map['add_device_ids'])){
                $model->addDeviceIds = $map['add_device_ids'];
            }
        }
        if(isset($map['del_device_ids'])){
            if(!empty($map['del_device_ids'])){
                $model->delDeviceIds = $map['del_device_ids'];
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
     * @description 需新增的设备id列表
     * @var array
     */
    public $addDeviceIds;

    /**
     * @description 需移除的设备id列表
     * @var array
     */
    public $delDeviceIds;

}
