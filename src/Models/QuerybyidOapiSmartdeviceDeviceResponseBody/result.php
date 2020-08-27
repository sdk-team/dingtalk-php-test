<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerybyidOapiSmartdeviceDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'deviceMac' => 'device_mac',
        'corpId' => 'corp_id',
        'nick' => 'nick',
        'deviceId' => 'device_id',
        'deviceName' => 'device_name',
        'pk' => 'pk',
        'userid' => 'userid',
        'ext' => 'ext',
        'sn' => 'sn',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceMac) {
            $res['device_mac'] = $this->deviceMac;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['device_name'] = $this->deviceName;
        }
        if (null !== $this->pk) {
            $res['pk'] = $this->pk;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->ext) {
            $res['ext'] = $this->ext;
        }
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_mac'])){
            $model->deviceMac = $map['device_mac'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['device_name'])){
            $model->deviceName = $map['device_name'];
        }
        if(isset($map['pk'])){
            $model->pk = $map['pk'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['ext'])){
            $model->ext = $map['ext'];
        }
        if(isset($map['sn'])){
            $model->sn = $map['sn'];
        }
        return $model;
    }
    /**
     * @description 设备mac
     * @var string
     */
    public $deviceMac;

    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

    /**
     * @description 设备nick
     * @var string
     */
    public $nick;

    /**
     * @description 设备id
     * @var string
     */
    public $deviceId;

    /**
     * @description 设备名称
     * @var string
     */
    public $deviceName;

    /**
     * @description 产品标识
     * @var string
     */
    public $pk;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 备注信息
     * @var string
     */
    public $ext;

    /**
     * @description 设备序列号
     * @var string
     */
    public $sn;

}
