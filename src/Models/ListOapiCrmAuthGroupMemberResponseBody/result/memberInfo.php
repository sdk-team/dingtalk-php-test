<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupMemberResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupMemberResponseBody\result\memberInfo\staff;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupMemberResponseBody\result\memberInfo\dept;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupMemberResponseBody\result\memberInfo\tag;

class memberInfo extends Model {
    protected $_name = [
        'staff' => 'staff',
        'dept' => 'dept',
        'tag' => 'tag',
        'allMember' => 'all_member',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->staff) {
            $res['staff'] = [];
            if(null !== $this->staff && is_array($this->staff)){
                $n = 0;
                foreach($this->staff as $item){
                    $res['staff'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dept) {
            $res['dept'] = [];
            if(null !== $this->dept && is_array($this->dept)){
                $n = 0;
                foreach($this->dept as $item){
                    $res['dept'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tag) {
            $res['tag'] = [];
            if(null !== $this->tag && is_array($this->tag)){
                $n = 0;
                foreach($this->tag as $item){
                    $res['tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->allMember) {
            $res['all_member'] = $this->allMember;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return memberInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['staff'])){
            if(!empty($map['staff'])){
                $model->staff = [];
                $n = 0;
                foreach($map['staff'] as $item) {
                    $model->staff[$n++] = null !== $item ? staff::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['dept'])){
            if(!empty($map['dept'])){
                $model->dept = [];
                $n = 0;
                foreach($map['dept'] as $item) {
                    $model->dept[$n++] = null !== $item ? dept::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['tag'])){
            if(!empty($map['tag'])){
                $model->tag = [];
                $n = 0;
                foreach($map['tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['all_member'])){
            $model->allMember = $map['all_member'];
        }
        return $model;
    }
    /**
     * @description 员工信息
     * @var array
     */
    public $staff;

    /**
     * @description 部门信息
     * @var array
     */
    public $dept;

    /**
     * @description 角色
     * @var array
     */
    public $tag;

    /**
     * @description 是否是全员分组
     * @var bool
     */
    public $allMember;

}
