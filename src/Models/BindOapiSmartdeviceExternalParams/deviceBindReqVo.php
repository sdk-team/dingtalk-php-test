<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BindOapiSmartdeviceExternalParams;

use AlibabaCloud\Tea\Model;

class deviceBindReqVo extends Model {
    protected $_name = [
        'nick' => 'nick',
        'sn' => 'sn',
        'mac' => 'mac',
        'outid' => 'outid',
        'ext' => 'ext',
        'dn' => 'dn',
        'pk' => 'pk',
    ];
    public function validate() {
        Model::validateRequired('sn', $this->sn, true);
        Model::validateRequired('dn', $this->dn, true);
        Model::validateRequired('pk', $this->pk, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        if (null !== $this->mac) {
            $res['mac'] = $this->mac;
        }
        if (null !== $this->outid) {
            $res['outid'] = $this->outid;
        }
        if (null !== $this->ext) {
            $res['ext'] = $this->ext;
        }
        if (null !== $this->dn) {
            $res['dn'] = $this->dn;
        }
        if (null !== $this->pk) {
            $res['pk'] = $this->pk;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return deviceBindReqVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['sn'])){
            $model->sn = $map['sn'];
        }
        if(isset($map['mac'])){
            $model->mac = $map['mac'];
        }
        if(isset($map['outid'])){
            $model->outid = $map['outid'];
        }
        if(isset($map['ext'])){
            $model->ext = $map['ext'];
        }
        if(isset($map['dn'])){
            $model->dn = $map['dn'];
        }
        if(isset($map['pk'])){
            $model->pk = $map['pk'];
        }
        return $model;
    }
    /**
     * @description 设备昵称
     * @var string
     */
    public $nick;

    /**
     * @description sn地址
     * @var string
     */
    public $sn;

    /**
     * @description mac地址
     * @var string
     */
    public $mac;

    /**
     * @description 外部设备id
     * @var string
     */
    public $outid;

    /**
     * @description 扩展信息
     * @var string
     */
    public $ext;

    /**
     * @description 设备名称
     * @var string
     */
    public $dn;

    /**
     * @description 产品key
     * @var string
     */
    public $pk;

}
