<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SyncOapiSmartdeviceDevicememberParams extends Model {
    protected $_name = [
        'deviceId' => 'device_id',
        'addUserids' => 'add_userids',
        'delUserids' => 'del_userids',
    ];
    public function validate() {
        Model::validateRequired('deviceId', $this->deviceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->addUserids) {
            $res['add_userids'] = $this->addUserids;
        }
        if (null !== $this->delUserids) {
            $res['del_userids'] = $this->delUserids;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SyncOapiSmartdeviceDevicememberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['add_userids'])){
            if(!empty($map['add_userids'])){
                $model->addUserids = $map['add_userids'];
            }
        }
        if(isset($map['del_userids'])){
            if(!empty($map['del_userids'])){
                $model->delUserids = $map['del_userids'];
            }
        }
        return $model;
    }
    /**
     * @description 设备id
     * @var int
     */
    public $deviceId;

    /**
     * @description 需新增的userIds（与del_userids必填其一）
     * @var array
     */
    public $addUserids;

    /**
     * @description 需移除的userIds（与add_userids必填其一）
     * @var array
     */
    public $delUserids;

}
