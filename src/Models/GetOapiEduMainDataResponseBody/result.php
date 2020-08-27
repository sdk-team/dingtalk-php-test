<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduMainDataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'teacherSendDingCnt1d' => 'teacher_send_ding_cnt_1d',
        'actTeacherCnt7d' => 'act_teacher_cnt_7d',
        'classCardUserCnt7d' => 'class_card_user_cnt_7d',
        'authTeacherCntStd' => 'auth_teacher_cnt_std',
        'actPatriarchCnt1d' => 'act_patriarch_cnt_1d',
        'sendCirclePostCnt1d' => 'send_circle_post_cnt_1d',
        'actClassCircleCnt7d' => 'act_class_circle_cnt_7d',
        'actClassCircleCnt1d' => 'act_class_circle_cnt_1d',
        'schoolCntStd' => 'school_cnt_std',
        'actClassGroupCnt1d' => 'act_class_group_cnt_1d',
        'rcvDingPatriarchCnt7d' => 'rcv_ding_patriarch_cnt_7d',
        'classCntStd' => 'class_cnt_std',
        'classGroupUserCnt1d' => 'class_group_user_cnt_1d',
        'patriarchCntStd' => 'patriarch_cnt_std',
        'actClassGroupCnt7d' => 'act_class_group_cnt_7d',
        'actPatriarchCnt7d' => 'act_patriarch_cnt_7d',
        'statDate' => 'stat_date',
        'classCircleUserCnt1d' => 'class_circle_user_cnt_1d',
        'corpId' => 'corp_id',
        'teacherSendDingCnt7d' => 'teacher_send_ding_cnt_7d',
        'studentCntStd' => 'student_cnt_std',
        'classGroupUserCnt7d' => 'class_group_user_cnt_7d',
        'rcvDingPatriarchCnt1d' => 'rcv_ding_patriarch_cnt_1d',
        'classCardUserCnt1d' => 'class_card_user_cnt_1d',
        'classCircleUserCnt7d' => 'class_circle_user_cnt_7d',
        'actTeacherCnt1d' => 'act_teacher_cnt_1d',
        'teacherCntStd' => 'teacher_cnt_std',
        'sendCirclePostCnt7d' => 'send_circle_post_cnt_7d',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->teacherSendDingCnt1d) {
            $res['teacher_send_ding_cnt_1d'] = $this->teacherSendDingCnt1d;
        }
        if (null !== $this->actTeacherCnt7d) {
            $res['act_teacher_cnt_7d'] = $this->actTeacherCnt7d;
        }
        if (null !== $this->classCardUserCnt7d) {
            $res['class_card_user_cnt_7d'] = $this->classCardUserCnt7d;
        }
        if (null !== $this->authTeacherCntStd) {
            $res['auth_teacher_cnt_std'] = $this->authTeacherCntStd;
        }
        if (null !== $this->actPatriarchCnt1d) {
            $res['act_patriarch_cnt_1d'] = $this->actPatriarchCnt1d;
        }
        if (null !== $this->sendCirclePostCnt1d) {
            $res['send_circle_post_cnt_1d'] = $this->sendCirclePostCnt1d;
        }
        if (null !== $this->actClassCircleCnt7d) {
            $res['act_class_circle_cnt_7d'] = $this->actClassCircleCnt7d;
        }
        if (null !== $this->actClassCircleCnt1d) {
            $res['act_class_circle_cnt_1d'] = $this->actClassCircleCnt1d;
        }
        if (null !== $this->schoolCntStd) {
            $res['school_cnt_std'] = $this->schoolCntStd;
        }
        if (null !== $this->actClassGroupCnt1d) {
            $res['act_class_group_cnt_1d'] = $this->actClassGroupCnt1d;
        }
        if (null !== $this->rcvDingPatriarchCnt7d) {
            $res['rcv_ding_patriarch_cnt_7d'] = $this->rcvDingPatriarchCnt7d;
        }
        if (null !== $this->classCntStd) {
            $res['class_cnt_std'] = $this->classCntStd;
        }
        if (null !== $this->classGroupUserCnt1d) {
            $res['class_group_user_cnt_1d'] = $this->classGroupUserCnt1d;
        }
        if (null !== $this->patriarchCntStd) {
            $res['patriarch_cnt_std'] = $this->patriarchCntStd;
        }
        if (null !== $this->actClassGroupCnt7d) {
            $res['act_class_group_cnt_7d'] = $this->actClassGroupCnt7d;
        }
        if (null !== $this->actPatriarchCnt7d) {
            $res['act_patriarch_cnt_7d'] = $this->actPatriarchCnt7d;
        }
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->classCircleUserCnt1d) {
            $res['class_circle_user_cnt_1d'] = $this->classCircleUserCnt1d;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->teacherSendDingCnt7d) {
            $res['teacher_send_ding_cnt_7d'] = $this->teacherSendDingCnt7d;
        }
        if (null !== $this->studentCntStd) {
            $res['student_cnt_std'] = $this->studentCntStd;
        }
        if (null !== $this->classGroupUserCnt7d) {
            $res['class_group_user_cnt_7d'] = $this->classGroupUserCnt7d;
        }
        if (null !== $this->rcvDingPatriarchCnt1d) {
            $res['rcv_ding_patriarch_cnt_1d'] = $this->rcvDingPatriarchCnt1d;
        }
        if (null !== $this->classCardUserCnt1d) {
            $res['class_card_user_cnt_1d'] = $this->classCardUserCnt1d;
        }
        if (null !== $this->classCircleUserCnt7d) {
            $res['class_circle_user_cnt_7d'] = $this->classCircleUserCnt7d;
        }
        if (null !== $this->actTeacherCnt1d) {
            $res['act_teacher_cnt_1d'] = $this->actTeacherCnt1d;
        }
        if (null !== $this->teacherCntStd) {
            $res['teacher_cnt_std'] = $this->teacherCntStd;
        }
        if (null !== $this->sendCirclePostCnt7d) {
            $res['send_circle_post_cnt_7d'] = $this->sendCirclePostCnt7d;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['teacher_send_ding_cnt_1d'])){
            $model->teacherSendDingCnt1d = $map['teacher_send_ding_cnt_1d'];
        }
        if(isset($map['act_teacher_cnt_7d'])){
            $model->actTeacherCnt7d = $map['act_teacher_cnt_7d'];
        }
        if(isset($map['class_card_user_cnt_7d'])){
            $model->classCardUserCnt7d = $map['class_card_user_cnt_7d'];
        }
        if(isset($map['auth_teacher_cnt_std'])){
            $model->authTeacherCntStd = $map['auth_teacher_cnt_std'];
        }
        if(isset($map['act_patriarch_cnt_1d'])){
            $model->actPatriarchCnt1d = $map['act_patriarch_cnt_1d'];
        }
        if(isset($map['send_circle_post_cnt_1d'])){
            $model->sendCirclePostCnt1d = $map['send_circle_post_cnt_1d'];
        }
        if(isset($map['act_class_circle_cnt_7d'])){
            $model->actClassCircleCnt7d = $map['act_class_circle_cnt_7d'];
        }
        if(isset($map['act_class_circle_cnt_1d'])){
            $model->actClassCircleCnt1d = $map['act_class_circle_cnt_1d'];
        }
        if(isset($map['school_cnt_std'])){
            $model->schoolCntStd = $map['school_cnt_std'];
        }
        if(isset($map['act_class_group_cnt_1d'])){
            $model->actClassGroupCnt1d = $map['act_class_group_cnt_1d'];
        }
        if(isset($map['rcv_ding_patriarch_cnt_7d'])){
            $model->rcvDingPatriarchCnt7d = $map['rcv_ding_patriarch_cnt_7d'];
        }
        if(isset($map['class_cnt_std'])){
            $model->classCntStd = $map['class_cnt_std'];
        }
        if(isset($map['class_group_user_cnt_1d'])){
            $model->classGroupUserCnt1d = $map['class_group_user_cnt_1d'];
        }
        if(isset($map['patriarch_cnt_std'])){
            $model->patriarchCntStd = $map['patriarch_cnt_std'];
        }
        if(isset($map['act_class_group_cnt_7d'])){
            $model->actClassGroupCnt7d = $map['act_class_group_cnt_7d'];
        }
        if(isset($map['act_patriarch_cnt_7d'])){
            $model->actPatriarchCnt7d = $map['act_patriarch_cnt_7d'];
        }
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['class_circle_user_cnt_1d'])){
            $model->classCircleUserCnt1d = $map['class_circle_user_cnt_1d'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['teacher_send_ding_cnt_7d'])){
            $model->teacherSendDingCnt7d = $map['teacher_send_ding_cnt_7d'];
        }
        if(isset($map['student_cnt_std'])){
            $model->studentCntStd = $map['student_cnt_std'];
        }
        if(isset($map['class_group_user_cnt_7d'])){
            $model->classGroupUserCnt7d = $map['class_group_user_cnt_7d'];
        }
        if(isset($map['rcv_ding_patriarch_cnt_1d'])){
            $model->rcvDingPatriarchCnt1d = $map['rcv_ding_patriarch_cnt_1d'];
        }
        if(isset($map['class_card_user_cnt_1d'])){
            $model->classCardUserCnt1d = $map['class_card_user_cnt_1d'];
        }
        if(isset($map['class_circle_user_cnt_7d'])){
            $model->classCircleUserCnt7d = $map['class_circle_user_cnt_7d'];
        }
        if(isset($map['act_teacher_cnt_1d'])){
            $model->actTeacherCnt1d = $map['act_teacher_cnt_1d'];
        }
        if(isset($map['teacher_cnt_std'])){
            $model->teacherCntStd = $map['teacher_cnt_std'];
        }
        if(isset($map['send_circle_post_cnt_7d'])){
            $model->sendCirclePostCnt7d = $map['send_circle_post_cnt_7d'];
        }
        return $model;
    }
    /**
     * @description 最近1天教师钉消息发送数
     * @var string
     */
    public $teacherSendDingCnt1d;

    /**
     * @description 最近7天活跃教师数量
     * @var string
     */
    public $actTeacherCnt7d;

    /**
     * @description 最近7天班级打卡使用人数
     * @var string
     */
    public $classCardUserCnt7d;

    /**
     * @description 数字化教师数量
     * @var string
     */
    public $authTeacherCntStd;

    /**
     * @description 最近1天活跃家长数量
     * @var string
     */
    public $actPatriarchCnt1d;

    /**
     * @description 最近1天班级圈发送数
     * @var string
     */
    public $sendCirclePostCnt1d;

    /**
     * @description 最近7天活跃班级圈数
     * @var string
     */
    public $actClassCircleCnt7d;

    /**
     * @description 最近1天活跃班级圈数
     * @var string
     */
    public $actClassCircleCnt1d;

    /**
     * @description 注册学校数
     * @var string
     */
    public $schoolCntStd;

    /**
     * @description 最近1天活跃班级群数
     * @var string
     */
    public $actClassGroupCnt1d;

    /**
     * @description 最近7天接收DING的家长数
     * @var string
     */
    public $rcvDingPatriarchCnt7d;

    /**
     * @description 注册班级数
     * @var string
     */
    public $classCntStd;

    /**
     * @description 最近1天班级群使用人数
     * @var string
     */
    public $classGroupUserCnt1d;

    /**
     * @description 注册家长数
     * @var string
     */
    public $patriarchCntStd;

    /**
     * @description 最近7天活跃班级群数
     * @var string
     */
    public $actClassGroupCnt7d;

    /**
     * @description 最近7天活跃家长数量
     * @var string
     */
    public $actPatriarchCnt7d;

    /**
     * @description 统计日期
     * @var string
     */
    public $statDate;

    /**
     * @description 最近1天班级圈使用人数
     * @var string
     */
    public $classCircleUserCnt1d;

    /**
     * @description 局id
     * @var string
     */
    public $corpId;

    /**
     * @description 最近7天教师钉消息发送数
     * @var string
     */
    public $teacherSendDingCnt7d;

    /**
     * @description 注册学生数
     * @var string
     */
    public $studentCntStd;

    /**
     * @description 最近7天班级群使用人数
     * @var string
     */
    public $classGroupUserCnt7d;

    /**
     * @description 最近1天接收DING的家长数
     * @var string
     */
    public $rcvDingPatriarchCnt1d;

    /**
     * @description 最近1天班级打卡使用人数
     * @var string
     */
    public $classCardUserCnt1d;

    /**
     * @description 最近7天班级圈使用人数
     * @var string
     */
    public $classCircleUserCnt7d;

    /**
     * @description 最近1天活跃教师数量
     * @var string
     */
    public $actTeacherCnt1d;

    /**
     * @description 注册教师数
     * @var string
     */
    public $teacherCntStd;

    /**
     * @description 最近7天班级圈发送数
     * @var string
     */
    public $sendCirclePostCnt7d;

}
