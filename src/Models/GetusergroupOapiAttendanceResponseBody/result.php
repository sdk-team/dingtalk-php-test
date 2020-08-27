<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupOapiAttendanceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupOapiAttendanceResponseBody\result\classes;

class result extends Model {
    protected $_name = [
        'name' => 'name',
        'groupId' => 'group_id',
        'type' => 'type',
        'classes' => 'classes',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->classes) {
            $res['classes'] = [];
            if(null !== $this->classes && is_array($this->classes)){
                $n = 0;
                foreach($this->classes as $item){
                    $res['classes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['classes'])){
            if(!empty($map['classes'])){
                $model->classes = [];
                $n = 0;
                foreach($map['classes'] as $item) {
                    $model->classes[$n++] = null !== $item ? classes::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 考勤组名称
     * @var string
     */
    public $name;

    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

    /**
     * @description 考勤组类型
     * @var string
     */
    public $type;

    /**
     * @description 考勤组中的班次列表
     * @var array
     */
    public $classes;

}
