<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartworkHrmEmployeeParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartworkHrmEmployeeParams\param\groups;

class param extends Model {
    protected $_name = [
        'userid' => 'userid',
        'groups' => 'groups',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->groups) {
            $res['groups'] = [];
            if(null !== $this->groups && is_array($this->groups)){
                $n = 0;
                foreach($this->groups as $item){
                    $res['groups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['groups'])){
            if(!empty($map['groups'])){
                $model->groups = [];
                $n = 0;
                foreach($map['groups'] as $item) {
                    $model->groups[$n++] = null !== $item ? groups::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description staff_id or userId用户在企业的唯一标识
     * @var string
     */
    public $userid;

    /**
     * @description 所有组明细
     * @var array
     */
    public $groups;

}
