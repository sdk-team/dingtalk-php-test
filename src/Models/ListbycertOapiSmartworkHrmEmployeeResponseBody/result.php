<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbycertOapiSmartworkHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'userid' => 'userid',
        'certNo' => 'cert_no',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['cert_no'])){
            $model->certNo = $map['cert_no'];
        }
        return $model;
    }
    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 身份证号
     * @var string
     */
    public $certNo;

}
