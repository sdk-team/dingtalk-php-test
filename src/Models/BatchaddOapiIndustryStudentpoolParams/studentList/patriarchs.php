<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiIndustryStudentpoolParams\studentList;

use AlibabaCloud\Tea\Model;

class patriarchs extends Model {
    protected $_name = [
        'relation' => 'relation',
        'mobile' => 'mobile',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return patriarchs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['relation'])){
            $model->relation = $map['relation'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 联系人与学员的关系
     * @var string
     */
    public $relation;

    /**
     * @description 联系人手机号
     * @var string
     */
    public $mobile;

    /**
     * @description 联系人名字
     * @var string
     */
    public $name;

}
