<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCollectionInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCollectionInstanceResponseBody\result\list_\forms;

class list_ extends Model {
    protected $_name = [
        'createTime' => 'create_time',
        'submitterUserid' => 'submitter_userid',
        'submitterUserName' => 'submitter_user_name',
        'forms' => 'forms',
        'modifyTime' => 'modify_time',
        'formInstanceId' => 'form_instance_id',
        'studentClassName' => 'student_class_name',
        'studentName' => 'student_name',
        'studentClassId' => 'student_class_id',
        'studentUserId' => 'student_user_id',
    ];
    public function validate() {
        Model::validatePattern('createTime', $this->createTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('modifyTime', $this->modifyTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->submitterUserid) {
            $res['submitter_userid'] = $this->submitterUserid;
        }
        if (null !== $this->submitterUserName) {
            $res['submitter_user_name'] = $this->submitterUserName;
        }
        if (null !== $this->forms) {
            $res['forms'] = [];
            if(null !== $this->forms && is_array($this->forms)){
                $n = 0;
                foreach($this->forms as $item){
                    $res['forms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modifyTime) {
            $res['modify_time'] = $this->modifyTime;
        }
        if (null !== $this->formInstanceId) {
            $res['form_instance_id'] = $this->formInstanceId;
        }
        if (null !== $this->studentClassName) {
            $res['student_class_name'] = $this->studentClassName;
        }
        if (null !== $this->studentName) {
            $res['student_name'] = $this->studentName;
        }
        if (null !== $this->studentClassId) {
            $res['student_class_id'] = $this->studentClassId;
        }
        if (null !== $this->studentUserId) {
            $res['student_user_id'] = $this->studentUserId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['submitter_userid'])){
            $model->submitterUserid = $map['submitter_userid'];
        }
        if(isset($map['submitter_user_name'])){
            $model->submitterUserName = $map['submitter_user_name'];
        }
        if(isset($map['forms'])){
            if(!empty($map['forms'])){
                $model->forms = [];
                $n = 0;
                foreach($map['forms'] as $item) {
                    $model->forms[$n++] = null !== $item ? forms::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['modify_time'])){
            $model->modifyTime = $map['modify_time'];
        }
        if(isset($map['form_instance_id'])){
            $model->formInstanceId = $map['form_instance_id'];
        }
        if(isset($map['student_class_name'])){
            $model->studentClassName = $map['student_class_name'];
        }
        if(isset($map['student_name'])){
            $model->studentName = $map['student_name'];
        }
        if(isset($map['student_class_id'])){
            $model->studentClassId = $map['student_class_id'];
        }
        if(isset($map['student_user_id'])){
            $model->studentUserId = $map['student_user_id'];
        }
        return $model;
    }
    /**
     * @description 毫秒级时间戳，填表提交时间
     * @var string
     */
    public $createTime;

    /**
     * @description 提交人userid
     * @var string
     */
    public $submitterUserid;

    /**
     * @description 提交人姓名
     * @var string
     */
    public $submitterUserName;

    /**
     * @description 表单内容列表
     * @var array
     */
    public $forms;

    /**
     * @description 更新时间
     * @var string
     */
    public $modifyTime;

    /**
     * @description 实例id
     * @var string
     */
    public $formInstanceId;

    /**
     * @description 学生班级名称
     * @var string
     */
    public $studentClassName;

    /**
     * @description 学生名称
     * @var string
     */
    public $studentName;

    /**
     * @description 学生班级id
     * @var int
     */
    public $studentClassId;

    /**
     * @description 学生id
     * @var string
     */
    public $studentUserId;

}
