<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ConfirmOapiAttendanceCorpParams;

use AlibabaCloud\Tea\Model;

class corpList extends Model {
    protected $_name = [
        'staffAmount' => 'staff_amount',
        'adminPhone' => 'admin_phone',
        'adminName' => 'admin_name',
    ];
    public function validate() {
        Model::validateRequired('staffAmount', $this->staffAmount, true);
        Model::validateRequired('adminPhone', $this->adminPhone, true);
        Model::validateRequired('adminName', $this->adminName, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->staffAmount) {
            $res['staff_amount'] = $this->staffAmount;
        }
        if (null !== $this->adminPhone) {
            $res['admin_phone'] = $this->adminPhone;
        }
        if (null !== $this->adminName) {
            $res['admin_name'] = $this->adminName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return corpList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['staff_amount'])){
            $model->staffAmount = $map['staff_amount'];
        }
        if(isset($map['admin_phone'])){
            $model->adminPhone = $map['admin_phone'];
        }
        if(isset($map['admin_name'])){
            $model->adminName = $map['admin_name'];
        }
        return $model;
    }
    /**
     * @description 企业人数
     * @var int
     */
    public $staffAmount;

    /**
     * @description 管理员手机号
     * @var string
     */
    public $adminPhone;

    /**
     * @description 管理员名称
     * @var string
     */
    public $adminName;

}
