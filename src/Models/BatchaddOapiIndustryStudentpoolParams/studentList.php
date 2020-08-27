<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiIndustryStudentpoolParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiIndustryStudentpoolParams\studentList\patriarchs;

class studentList extends Model {
    protected $_name = [
        'mobile' => 'mobile',
        'packageIds' => 'package_ids',
        'number' => 'number',
        'patriarchs' => 'patriarchs',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->packageIds) {
            $res['package_ids'] = $this->packageIds;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->patriarchs) {
            $res['patriarchs'] = [];
            if(null !== $this->patriarchs && is_array($this->patriarchs)){
                $n = 0;
                foreach($this->patriarchs as $item){
                    $res['patriarchs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return studentList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['package_ids'])){
            if(!empty($map['package_ids'])){
                $model->packageIds = $map['package_ids'];
            }
        }
        if(isset($map['number'])){
            $model->number = $map['number'];
        }
        if(isset($map['patriarchs'])){
            if(!empty($map['patriarchs'])){
                $model->patriarchs = [];
                $n = 0;
                foreach($map['patriarchs'] as $item) {
                    $model->patriarchs[$n++] = null !== $item ? patriarchs::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 学员手机号
     * @var string
     */
    public $mobile;

    /**
     * @description 课包ID列表
     * @var array
     */
    public $packageIds;

    /**
     * @description 学员编号
     * @var string
     */
    public $number;

    /**
     * @description 学员联系人列表
     * @var array
     */
    public $patriarchs;

    /**
     * @description 学员名字
     * @var string
     */
    public $name;

}
