<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCateringStoreResponseBody\result\data;

use AlibabaCloud\Tea\Model;

class managerList extends Model {
    protected $_name = [
        'staffId' => 'staff_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->staffId) {
            $res['staff_id'] = $this->staffId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return managerList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['staff_id'])){
            $model->staffId = $map['staff_id'];
        }
        return $model;
    }
    /**
     * @description 门店店长工号
     * @var string
     */
    public $staffId;

}
