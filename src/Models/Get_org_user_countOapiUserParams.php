<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_org_user_countOapiUserParams extends Model {
    protected $_name = [
        'onlyActive' => 'onlyActive',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->onlyActive) {
            $res['onlyActive'] = $this->onlyActive;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_org_user_countOapiUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['onlyActive'])){
            $model->onlyActive = $map['onlyActive'];
        }
        return $model;
    }
    /**
     * @description 0：包含未激活钉钉的人员数量 1：不包含未激活钉钉的人员数量
     * @var int
     */
    public $onlyActive;

}
