<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiUserCorpinfoParams extends Model {
    protected $_name = [
        'mobile' => 'mobile',
        'corpName' => 'corp_name',
    ];
    public function validate() {
        Model::validateRequired('mobile', $this->mobile, true);
        Model::validateRequired('corpName', $this->corpName, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiUserCorpinfoParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        return $model;
    }
    /**
     * @description 用户手机号
     * @var string
     */
    public $mobile;

    /**
     * @description 企业全称
     * @var string
     */
    public $corpName;

}
