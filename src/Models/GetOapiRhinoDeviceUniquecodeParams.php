<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiRhinoDeviceUniquecodeParams extends Model {
    protected $_name = [
        'uniqueCode' => 'unique_code',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('uniqueCode', $this->uniqueCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->uniqueCode) {
            $res['unique_code'] = $this->uniqueCode;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiRhinoDeviceUniquecodeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unique_code'])){
            $model->uniqueCode = $map['unique_code'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 设备uniqueCode
     * @var string
     */
    public $uniqueCode;

    /**
     * @description 业务参数[这里先预留],这里是用户ID,比如钉钉用户ID
     * @var string
     */
    public $userid;

}
