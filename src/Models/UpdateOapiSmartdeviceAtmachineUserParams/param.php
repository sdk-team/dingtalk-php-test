<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartdeviceAtmachineUserParams;

use AlibabaCloud\Tea\Model;

class param extends Model {
    protected $_name = [
        'delUseridList' => 'del_userid_list',
        'deviceidList' => 'deviceid_list',
        'addUseridList' => 'add_userid_list',
        'devidList' => 'devid_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->delUseridList) {
            $res['del_userid_list'] = $this->delUseridList;
        }
        if (null !== $this->deviceidList) {
            $res['deviceid_list'] = $this->deviceidList;
        }
        if (null !== $this->addUseridList) {
            $res['add_userid_list'] = $this->addUseridList;
        }
        if (null !== $this->devidList) {
            $res['devid_list'] = $this->devidList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['del_userid_list'])){
            if(!empty($map['del_userid_list'])){
                $model->delUseridList = $map['del_userid_list'];
            }
        }
        if(isset($map['deviceid_list'])){
            if(!empty($map['deviceid_list'])){
                $model->deviceidList = $map['deviceid_list'];
            }
        }
        if(isset($map['add_userid_list'])){
            if(!empty($map['add_userid_list'])){
                $model->addUseridList = $map['add_userid_list'];
            }
        }
        if(isset($map['devid_list'])){
            if(!empty($map['devid_list'])){
                $model->devidList = $map['devid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 移除的员工id列表
     * @var array
     */
    public $delUseridList;

    /**
     * @description 设备唯一标识id列表，字符串数组
     * @var array
     */
    public $deviceidList;

    /**
     * @description 新增的员工id列表
     * @var array
     */
    public $addUseridList;

    /**
     * @description 设备唯一标识id列表，Long数组
     * @var array
     */
    public $devidList;

}
