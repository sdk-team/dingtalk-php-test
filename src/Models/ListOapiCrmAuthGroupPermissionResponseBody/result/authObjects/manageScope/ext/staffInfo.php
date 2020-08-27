<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects\manageScope\ext;

use AlibabaCloud\Tea\Model;

class staffInfo extends Model {
    protected $_name = [
        'name' => 'name',
        'staffId' => 'staff_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->staffId) {
            $res['staff_id'] = $this->staffId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return staffInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['staff_id'])){
            $model->staffId = $map['staff_id'];
        }
        return $model;
    }
    /**
     * @description 员工名称
     * @var string
     */
    public $name;

    /**
     * @description 员工id
     * @var string
     */
    public $staffId;

}
