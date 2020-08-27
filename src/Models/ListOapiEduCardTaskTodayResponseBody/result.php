<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduCardTaskTodayResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'isFinishTask' => 'is_finish_task',
        'date' => 'date',
        'userCardTaskId' => 'user_card_task_id',
        'studentName' => 'student_name',
        'className' => 'class_name',
        'content' => 'content',
        'title' => 'title',
        'cardId' => 'card_id',
    ];
    public function validate() {
        Model::validatePattern('date', $this->date, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->isFinishTask) {
            $res['is_finish_task'] = $this->isFinishTask;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->userCardTaskId) {
            $res['user_card_task_id'] = $this->userCardTaskId;
        }
        if (null !== $this->studentName) {
            $res['student_name'] = $this->studentName;
        }
        if (null !== $this->className) {
            $res['class_name'] = $this->className;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->cardId) {
            $res['card_id'] = $this->cardId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['is_finish_task'])){
            $model->isFinishTask = $map['is_finish_task'];
        }
        if(isset($map['date'])){
            $model->date = $map['date'];
        }
        if(isset($map['user_card_task_id'])){
            $model->userCardTaskId = $map['user_card_task_id'];
        }
        if(isset($map['student_name'])){
            $model->studentName = $map['student_name'];
        }
        if(isset($map['class_name'])){
            $model->className = $map['class_name'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['card_id'])){
            $model->cardId = $map['card_id'];
        }
        return $model;
    }
    /**
     * @description 是否完成打卡 N当日未完成打卡  Y完成打卡
     * @var string
     */
    public $isFinishTask;

    /**
     * @description 打卡日期
     * @var string
     */
    public $date;

    /**
     * @description 任务id
     * @var int
     */
    public $userCardTaskId;

    /**
     * @description 学生名字
     * @var string
     */
    public $studentName;

    /**
     * @description 班级名称
     * @var string
     */
    public $className;

    /**
     * @description 打卡内容
     * @var string
     */
    public $content;

    /**
     * @description 打卡任务名字
     * @var string
     */
    public $title;

    /**
     * @description 卡片id
     * @var int
     */
    public $cardId;

}
