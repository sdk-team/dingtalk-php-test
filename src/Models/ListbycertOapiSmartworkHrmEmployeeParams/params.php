<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbycertOapiSmartworkHrmEmployeeParams;

use AlibabaCloud\Tea\Model;

class params extends Model {
    protected $_name = [
        'certNo' => 'cert_no',
        'realName' => 'real_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        if (null !== $this->realName) {
            $res['real_name'] = $this->realName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return params
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cert_no'])){
            $model->certNo = $map['cert_no'];
        }
        if(isset($map['real_name'])){
            $model->realName = $map['real_name'];
        }
        return $model;
    }
    /**
     * @description 身份证号
     * @var string
     */
    public $certNo;

    /**
     * @description 姓名
     * @var string
     */
    public $realName;

}
