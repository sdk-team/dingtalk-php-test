<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartworkHrmEmployeeParams\param;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartworkHrmEmployeeParams\param\groups\sections;

class groups extends Model {
    protected $_name = [
        'groupId' => 'group_id',
        'sections' => 'sections',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->sections) {
            $res['sections'] = [];
            if(null !== $this->sections && is_array($this->sections)){
                $n = 0;
                foreach($this->sections as $item){
                    $res['sections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return groups
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['sections'])){
            if(!empty($map['sections'])){
                $model->sections = [];
                $n = 0;
                foreach($map['sections'] as $item) {
                    $model->sections[$n++] = null !== $item ? sections::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 需改的字段所在组ID
     * @var string
     */
    public $groupId;

    /**
     * @description 同类型组明细
     * @var array
     */
    public $sections;

}
