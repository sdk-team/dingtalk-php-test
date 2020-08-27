<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyteacherOapiEduClassResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'nick' => 'nick',
        'classId' => 'class_id',
        'graduate' => 'graduate',
        'count' => 'count',
        'name' => 'name',
        'warning' => 'warning',
        'superId' => 'super_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->graduate) {
            $res['graduate'] = $this->graduate;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->warning) {
            $res['warning'] = $this->warning;
        }
        if (null !== $this->superId) {
            $res['super_id'] = $this->superId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['graduate'])){
            $model->graduate = $map['graduate'];
        }
        if(isset($map['count'])){
            $model->count = $map['count'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['warning'])){
            $model->warning = $map['warning'];
        }
        if(isset($map['super_id'])){
            $model->superId = $map['super_id'];
        }
        return $model;
    }
    /**
     * @description 昵称
     * @var string
     */
    public $nick;

    /**
     * @description 部门ID
     * @var int
     */
    public $classId;

    /**
     * @description 是否毕业班
     * @var bool
     */
    public $graduate;

    /**
     * @description 班级学生人数
     * @var int
     */
    public $count;

    /**
     * @description 班级名称
     * @var string
     */
    public $name;

    /**
     * @description 不再过滤群类型
     * @var string
     */
    public $warning;

    /**
     * @description 父部门ID
     * @var int
     */
    public $superId;

}
