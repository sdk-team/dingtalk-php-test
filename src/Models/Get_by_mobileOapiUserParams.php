<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_by_mobileOapiUserParams extends Model {
    protected $_name = [
        'mobile' => 'mobile',
    ];
    public function validate() {
        Model::validateRequired('mobile', $this->mobile, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_by_mobileOapiUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        return $model;
    }
    /**
     * @description 手机号
     * @var string
     */
    public $mobile;

}
