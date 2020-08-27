<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class OpenOapiAttendanceCorpInviteactiveParams extends Model {
    protected $_name = [
        'adminName' => 'admin_name',
        'adminPhone' => 'admin_phone',
    ];
    public function validate() {
        Model::validateRequired('adminName', $this->adminName, true);
        Model::validateRequired('adminPhone', $this->adminPhone, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->adminName) {
            $res['admin_name'] = $this->adminName;
        }
        if (null !== $this->adminPhone) {
            $res['admin_phone'] = $this->adminPhone;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return OpenOapiAttendanceCorpInviteactiveParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['admin_name'])){
            $model->adminName = $map['admin_name'];
        }
        if(isset($map['admin_phone'])){
            $model->adminPhone = $map['admin_phone'];
        }
        return $model;
    }
    /**
     * @description 姓名
     * @var string
     */
    public $adminName;

    /**
     * @description 手机号
     * @var string
     */
    public $adminPhone;

}
