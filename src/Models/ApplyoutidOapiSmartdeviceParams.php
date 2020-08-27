<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ApplyoutidOapiSmartdeviceParams extends Model {
    protected $_name = [
        'devServId' => 'dev_serv_id',
        'sn' => 'sn',
    ];
    public function validate() {
        Model::validateRequired('devServId', $this->devServId, true);
        Model::validateRequired('sn', $this->sn, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->devServId) {
            $res['dev_serv_id'] = $this->devServId;
        }
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ApplyoutidOapiSmartdeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dev_serv_id'])){
            $model->devServId = $map['dev_serv_id'];
        }
        if(isset($map['sn'])){
            $model->sn = $map['sn'];
        }
        return $model;
    }
    /**
     * @description 设备类型id
     * @var int
     */
    public $devServId;

    /**
     * @description 设备序列号
     * @var string
     */
    public $sn;

}
