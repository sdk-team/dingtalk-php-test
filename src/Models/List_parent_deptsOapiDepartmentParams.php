<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class List_parent_deptsOapiDepartmentParams extends Model {
    protected $_name = [
        'userId' => 'userId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return List_parent_deptsOapiDepartmentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userId'])){
            $model->userId = $map['userId'];
        }
        return $model;
    }
    /**
     * @description 用户userId
     * @var string
     */
    public $userId;

}
