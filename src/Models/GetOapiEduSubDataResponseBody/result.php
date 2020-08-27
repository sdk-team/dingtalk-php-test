<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduSubDataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'subCorpAreaLng' => 'sub_corp_area_lng',
        'subCorpAreaLat' => 'sub_corp_area_lat',
        'classCardUserCnt7d' => 'class_card_user_cnt_7d',
        'multiPatriarchStudentRatio' => 'multi_patriarch_student_ratio',
        'nonePatriarchStudentRatio' => 'none_patriarch_student_ratio',
        'rcvDingPatriarchCnt7d' => 'rcv_ding_patriarch_cnt_7d',
        'classCntStd' => 'class_cnt_std',
        'actClassGroupCnt7d' => 'act_class_group_cnt_7d',
        'activeMbrCntStd' => 'active_mbr_cnt_std',
        'actUsrRatio1d' => 'act_usr_ratio_1d',
        'actUsrCnt1d' => 'act_usr_cnt_1d',
        'statDate' => 'stat_date',
        'mbrCntStd' => 'mbr_cnt_std',
        'sendMsgUserRatio1d' => 'send_msg_user_ratio_1d',
        'corpId' => 'corp_id',
        'actUsrRatio7d' => 'act_usr_ratio_7d',
        'teacherSendDingCnt7d' => 'teacher_send_ding_cnt_7d',
        'twoPatriarchStudentRatio' => 'two_patriarch_student_ratio',
        'dingIndex1d' => 'ding_index_1d',
        'studentCntStd' => 'student_cnt_std',
        'subCorpName' => 'sub_corp_name',
        'classGroupUserCnt7d' => 'class_group_user_cnt_7d',
        'classCardUserCnt1d' => 'class_card_user_cnt_1d',
        'liveLaunchSuccCnt1d' => 'live_launch_succ_cnt_1d',
        'subCorpId' => 'sub_corp_id',
        'actTeacherCnt1d' => 'act_teacher_cnt_1d',
        'teacherCntStd' => 'teacher_cnt_std',
        'sendCirclePostCnt7d' => 'send_circle_post_cnt_7d',
        'teacherSendDingCnt1d' => 'teacher_send_ding_cnt_1d',
        'actTeacherCnt7d' => 'act_teacher_cnt_7d',
        'singlePatriarchStudentRatio' => 'single_patriarch_student_ratio',
        'twoPatriarchStudentCnt' => 'two_patriarch_student_cnt',
        'authTeacherCntStd' => 'auth_teacher_cnt_std',
        'actPatriarchCnt1d' => 'act_patriarch_cnt_1d',
        'sendCirclePostCnt1d' => 'send_circle_post_cnt_1d',
        'actClassCircleCnt7d' => 'act_class_circle_cnt_7d',
        'livePlayUserCnt7d' => 'live_play_user_cnt_7d',
        'actClassCircleCnt1d' => 'act_class_circle_cnt_1d',
        'sendMsgUserCnt1d' => 'send_msg_user_cnt_1d',
        'actClassGroupCnt1d' => 'act_class_group_cnt_1d',
        'classGroupUserCnt1d' => 'class_group_user_cnt_1d',
        'patriarchCntStd' => 'patriarch_cnt_std',
        'sendMsgUserRatio7d' => 'send_msg_user_ratio_7d',
        'mbrActiveRatio' => 'mbr_active_ratio',
        'singlePatriarchStudentCnt' => 'single_patriarch_student_cnt',
        'dingIndex7d' => 'ding_index_7d',
        'actPatriarchCnt7d' => 'act_patriarch_cnt_7d',
        'liveSuccTimeLen1d' => 'live_succ_time_len_1d',
        'classCircleUserCnt1d' => 'class_circle_user_cnt_1d',
        'multiPatriarchStudentCnt' => 'multi_patriarch_student_cnt',
        'liveLaunchSuccCnt7d' => 'live_launch_succ_cnt_7d',
        'livePlayUserCnt1d' => 'live_play_user_cnt_1d',
        'rcvDingPatriarchCnt1d' => 'rcv_ding_patriarch_cnt_1d',
        'nonePatriarchStudentCnt' => 'none_patriarch_student_cnt',
        'classCircleUserCnt7d' => 'class_circle_user_cnt_7d',
        'actUsrCnt7d' => 'act_usr_cnt_7d',
        'sendMsgUserCnt7d' => 'send_msg_user_cnt_7d',
        'liveSuccTimeLen7d' => 'live_succ_time_len_7d',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->subCorpAreaLng) {
            $res['sub_corp_area_lng'] = $this->subCorpAreaLng;
        }
        if (null !== $this->subCorpAreaLat) {
            $res['sub_corp_area_lat'] = $this->subCorpAreaLat;
        }
        if (null !== $this->classCardUserCnt7d) {
            $res['class_card_user_cnt_7d'] = $this->classCardUserCnt7d;
        }
        if (null !== $this->multiPatriarchStudentRatio) {
            $res['multi_patriarch_student_ratio'] = $this->multiPatriarchStudentRatio;
        }
        if (null !== $this->nonePatriarchStudentRatio) {
            $res['none_patriarch_student_ratio'] = $this->nonePatriarchStudentRatio;
        }
        if (null !== $this->rcvDingPatriarchCnt7d) {
            $res['rcv_ding_patriarch_cnt_7d'] = $this->rcvDingPatriarchCnt7d;
        }
        if (null !== $this->classCntStd) {
            $res['class_cnt_std'] = $this->classCntStd;
        }
        if (null !== $this->actClassGroupCnt7d) {
            $res['act_class_group_cnt_7d'] = $this->actClassGroupCnt7d;
        }
        if (null !== $this->activeMbrCntStd) {
            $res['active_mbr_cnt_std'] = $this->activeMbrCntStd;
        }
        if (null !== $this->actUsrRatio1d) {
            $res['act_usr_ratio_1d'] = $this->actUsrRatio1d;
        }
        if (null !== $this->actUsrCnt1d) {
            $res['act_usr_cnt_1d'] = $this->actUsrCnt1d;
        }
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->mbrCntStd) {
            $res['mbr_cnt_std'] = $this->mbrCntStd;
        }
        if (null !== $this->sendMsgUserRatio1d) {
            $res['send_msg_user_ratio_1d'] = $this->sendMsgUserRatio1d;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->actUsrRatio7d) {
            $res['act_usr_ratio_7d'] = $this->actUsrRatio7d;
        }
        if (null !== $this->teacherSendDingCnt7d) {
            $res['teacher_send_ding_cnt_7d'] = $this->teacherSendDingCnt7d;
        }
        if (null !== $this->twoPatriarchStudentRatio) {
            $res['two_patriarch_student_ratio'] = $this->twoPatriarchStudentRatio;
        }
        if (null !== $this->dingIndex1d) {
            $res['ding_index_1d'] = $this->dingIndex1d;
        }
        if (null !== $this->studentCntStd) {
            $res['student_cnt_std'] = $this->studentCntStd;
        }
        if (null !== $this->subCorpName) {
            $res['sub_corp_name'] = $this->subCorpName;
        }
        if (null !== $this->classGroupUserCnt7d) {
            $res['class_group_user_cnt_7d'] = $this->classGroupUserCnt7d;
        }
        if (null !== $this->classCardUserCnt1d) {
            $res['class_card_user_cnt_1d'] = $this->classCardUserCnt1d;
        }
        if (null !== $this->liveLaunchSuccCnt1d) {
            $res['live_launch_succ_cnt_1d'] = $this->liveLaunchSuccCnt1d;
        }
        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
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
        if (null !== $this->teacherSendDingCnt1d) {
            $res['teacher_send_ding_cnt_1d'] = $this->teacherSendDingCnt1d;
        }
        if (null !== $this->actTeacherCnt7d) {
            $res['act_teacher_cnt_7d'] = $this->actTeacherCnt7d;
        }
        if (null !== $this->singlePatriarchStudentRatio) {
            $res['single_patriarch_student_ratio'] = $this->singlePatriarchStudentRatio;
        }
        if (null !== $this->twoPatriarchStudentCnt) {
            $res['two_patriarch_student_cnt'] = $this->twoPatriarchStudentCnt;
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
        if (null !== $this->livePlayUserCnt7d) {
            $res['live_play_user_cnt_7d'] = $this->livePlayUserCnt7d;
        }
        if (null !== $this->actClassCircleCnt1d) {
            $res['act_class_circle_cnt_1d'] = $this->actClassCircleCnt1d;
        }
        if (null !== $this->sendMsgUserCnt1d) {
            $res['send_msg_user_cnt_1d'] = $this->sendMsgUserCnt1d;
        }
        if (null !== $this->actClassGroupCnt1d) {
            $res['act_class_group_cnt_1d'] = $this->actClassGroupCnt1d;
        }
        if (null !== $this->classGroupUserCnt1d) {
            $res['class_group_user_cnt_1d'] = $this->classGroupUserCnt1d;
        }
        if (null !== $this->patriarchCntStd) {
            $res['patriarch_cnt_std'] = $this->patriarchCntStd;
        }
        if (null !== $this->sendMsgUserRatio7d) {
            $res['send_msg_user_ratio_7d'] = $this->sendMsgUserRatio7d;
        }
        if (null !== $this->mbrActiveRatio) {
            $res['mbr_active_ratio'] = $this->mbrActiveRatio;
        }
        if (null !== $this->singlePatriarchStudentCnt) {
            $res['single_patriarch_student_cnt'] = $this->singlePatriarchStudentCnt;
        }
        if (null !== $this->dingIndex7d) {
            $res['ding_index_7d'] = $this->dingIndex7d;
        }
        if (null !== $this->actPatriarchCnt7d) {
            $res['act_patriarch_cnt_7d'] = $this->actPatriarchCnt7d;
        }
        if (null !== $this->liveSuccTimeLen1d) {
            $res['live_succ_time_len_1d'] = $this->liveSuccTimeLen1d;
        }
        if (null !== $this->classCircleUserCnt1d) {
            $res['class_circle_user_cnt_1d'] = $this->classCircleUserCnt1d;
        }
        if (null !== $this->multiPatriarchStudentCnt) {
            $res['multi_patriarch_student_cnt'] = $this->multiPatriarchStudentCnt;
        }
        if (null !== $this->liveLaunchSuccCnt7d) {
            $res['live_launch_succ_cnt_7d'] = $this->liveLaunchSuccCnt7d;
        }
        if (null !== $this->livePlayUserCnt1d) {
            $res['live_play_user_cnt_1d'] = $this->livePlayUserCnt1d;
        }
        if (null !== $this->rcvDingPatriarchCnt1d) {
            $res['rcv_ding_patriarch_cnt_1d'] = $this->rcvDingPatriarchCnt1d;
        }
        if (null !== $this->nonePatriarchStudentCnt) {
            $res['none_patriarch_student_cnt'] = $this->nonePatriarchStudentCnt;
        }
        if (null !== $this->classCircleUserCnt7d) {
            $res['class_circle_user_cnt_7d'] = $this->classCircleUserCnt7d;
        }
        if (null !== $this->actUsrCnt7d) {
            $res['act_usr_cnt_7d'] = $this->actUsrCnt7d;
        }
        if (null !== $this->sendMsgUserCnt7d) {
            $res['send_msg_user_cnt_7d'] = $this->sendMsgUserCnt7d;
        }
        if (null !== $this->liveSuccTimeLen7d) {
            $res['live_succ_time_len_7d'] = $this->liveSuccTimeLen7d;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sub_corp_area_lng'])){
            $model->subCorpAreaLng = $map['sub_corp_area_lng'];
        }
        if(isset($map['sub_corp_area_lat'])){
            $model->subCorpAreaLat = $map['sub_corp_area_lat'];
        }
        if(isset($map['class_card_user_cnt_7d'])){
            $model->classCardUserCnt7d = $map['class_card_user_cnt_7d'];
        }
        if(isset($map['multi_patriarch_student_ratio'])){
            $model->multiPatriarchStudentRatio = $map['multi_patriarch_student_ratio'];
        }
        if(isset($map['none_patriarch_student_ratio'])){
            $model->nonePatriarchStudentRatio = $map['none_patriarch_student_ratio'];
        }
        if(isset($map['rcv_ding_patriarch_cnt_7d'])){
            $model->rcvDingPatriarchCnt7d = $map['rcv_ding_patriarch_cnt_7d'];
        }
        if(isset($map['class_cnt_std'])){
            $model->classCntStd = $map['class_cnt_std'];
        }
        if(isset($map['act_class_group_cnt_7d'])){
            $model->actClassGroupCnt7d = $map['act_class_group_cnt_7d'];
        }
        if(isset($map['active_mbr_cnt_std'])){
            $model->activeMbrCntStd = $map['active_mbr_cnt_std'];
        }
        if(isset($map['act_usr_ratio_1d'])){
            $model->actUsrRatio1d = $map['act_usr_ratio_1d'];
        }
        if(isset($map['act_usr_cnt_1d'])){
            $model->actUsrCnt1d = $map['act_usr_cnt_1d'];
        }
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['mbr_cnt_std'])){
            $model->mbrCntStd = $map['mbr_cnt_std'];
        }
        if(isset($map['send_msg_user_ratio_1d'])){
            $model->sendMsgUserRatio1d = $map['send_msg_user_ratio_1d'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['act_usr_ratio_7d'])){
            $model->actUsrRatio7d = $map['act_usr_ratio_7d'];
        }
        if(isset($map['teacher_send_ding_cnt_7d'])){
            $model->teacherSendDingCnt7d = $map['teacher_send_ding_cnt_7d'];
        }
        if(isset($map['two_patriarch_student_ratio'])){
            $model->twoPatriarchStudentRatio = $map['two_patriarch_student_ratio'];
        }
        if(isset($map['ding_index_1d'])){
            $model->dingIndex1d = $map['ding_index_1d'];
        }
        if(isset($map['student_cnt_std'])){
            $model->studentCntStd = $map['student_cnt_std'];
        }
        if(isset($map['sub_corp_name'])){
            $model->subCorpName = $map['sub_corp_name'];
        }
        if(isset($map['class_group_user_cnt_7d'])){
            $model->classGroupUserCnt7d = $map['class_group_user_cnt_7d'];
        }
        if(isset($map['class_card_user_cnt_1d'])){
            $model->classCardUserCnt1d = $map['class_card_user_cnt_1d'];
        }
        if(isset($map['live_launch_succ_cnt_1d'])){
            $model->liveLaunchSuccCnt1d = $map['live_launch_succ_cnt_1d'];
        }
        if(isset($map['sub_corp_id'])){
            $model->subCorpId = $map['sub_corp_id'];
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
        if(isset($map['teacher_send_ding_cnt_1d'])){
            $model->teacherSendDingCnt1d = $map['teacher_send_ding_cnt_1d'];
        }
        if(isset($map['act_teacher_cnt_7d'])){
            $model->actTeacherCnt7d = $map['act_teacher_cnt_7d'];
        }
        if(isset($map['single_patriarch_student_ratio'])){
            $model->singlePatriarchStudentRatio = $map['single_patriarch_student_ratio'];
        }
        if(isset($map['two_patriarch_student_cnt'])){
            $model->twoPatriarchStudentCnt = $map['two_patriarch_student_cnt'];
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
        if(isset($map['live_play_user_cnt_7d'])){
            $model->livePlayUserCnt7d = $map['live_play_user_cnt_7d'];
        }
        if(isset($map['act_class_circle_cnt_1d'])){
            $model->actClassCircleCnt1d = $map['act_class_circle_cnt_1d'];
        }
        if(isset($map['send_msg_user_cnt_1d'])){
            $model->sendMsgUserCnt1d = $map['send_msg_user_cnt_1d'];
        }
        if(isset($map['act_class_group_cnt_1d'])){
            $model->actClassGroupCnt1d = $map['act_class_group_cnt_1d'];
        }
        if(isset($map['class_group_user_cnt_1d'])){
            $model->classGroupUserCnt1d = $map['class_group_user_cnt_1d'];
        }
        if(isset($map['patriarch_cnt_std'])){
            $model->patriarchCntStd = $map['patriarch_cnt_std'];
        }
        if(isset($map['send_msg_user_ratio_7d'])){
            $model->sendMsgUserRatio7d = $map['send_msg_user_ratio_7d'];
        }
        if(isset($map['mbr_active_ratio'])){
            $model->mbrActiveRatio = $map['mbr_active_ratio'];
        }
        if(isset($map['single_patriarch_student_cnt'])){
            $model->singlePatriarchStudentCnt = $map['single_patriarch_student_cnt'];
        }
        if(isset($map['ding_index_7d'])){
            $model->dingIndex7d = $map['ding_index_7d'];
        }
        if(isset($map['act_patriarch_cnt_7d'])){
            $model->actPatriarchCnt7d = $map['act_patriarch_cnt_7d'];
        }
        if(isset($map['live_succ_time_len_1d'])){
            $model->liveSuccTimeLen1d = $map['live_succ_time_len_1d'];
        }
        if(isset($map['class_circle_user_cnt_1d'])){
            $model->classCircleUserCnt1d = $map['class_circle_user_cnt_1d'];
        }
        if(isset($map['multi_patriarch_student_cnt'])){
            $model->multiPatriarchStudentCnt = $map['multi_patriarch_student_cnt'];
        }
        if(isset($map['live_launch_succ_cnt_7d'])){
            $model->liveLaunchSuccCnt7d = $map['live_launch_succ_cnt_7d'];
        }
        if(isset($map['live_play_user_cnt_1d'])){
            $model->livePlayUserCnt1d = $map['live_play_user_cnt_1d'];
        }
        if(isset($map['rcv_ding_patriarch_cnt_1d'])){
            $model->rcvDingPatriarchCnt1d = $map['rcv_ding_patriarch_cnt_1d'];
        }
        if(isset($map['none_patriarch_student_cnt'])){
            $model->nonePatriarchStudentCnt = $map['none_patriarch_student_cnt'];
        }
        if(isset($map['class_circle_user_cnt_7d'])){
            $model->classCircleUserCnt7d = $map['class_circle_user_cnt_7d'];
        }
        if(isset($map['act_usr_cnt_7d'])){
            $model->actUsrCnt7d = $map['act_usr_cnt_7d'];
        }
        if(isset($map['send_msg_user_cnt_7d'])){
            $model->sendMsgUserCnt7d = $map['send_msg_user_cnt_7d'];
        }
        if(isset($map['live_succ_time_len_7d'])){
            $model->liveSuccTimeLen7d = $map['live_succ_time_len_7d'];
        }
        return $model;
    }
    /**
     * @description 所辖组织的地理经度
     * @var string
     */
    public $subCorpAreaLng;

    /**
     * @description 所辖组织的地理纬度
     * @var string
     */
    public $subCorpAreaLat;

    /**
     * @description 最近7天班级打卡使用人数
     * @var string
     */
    public $classCardUserCnt7d;

    /**
     * @description 多家长监管学生比率
     * @var string
     */
    public $multiPatriarchStudentRatio;

    /**
     * @description 无家长监管学生比率
     * @var string
     */
    public $nonePatriarchStudentRatio;

    /**
     * @description 最近7天接收DING的家长数
     * @var string
     */
    public $rcvDingPatriarchCnt7d;

    /**
     * @description 班级数量
     * @var string
     */
    public $classCntStd;

    /**
     * @description 最近7天活跃的班级群数
     * @var string
     */
    public $actClassGroupCnt7d;

    /**
     * @description 激活用户数
     * @var string
     */
    public $activeMbrCntStd;

    /**
     * @description 最近1天活跃率
     * @var string
     */
    public $actUsrRatio1d;

    /**
     * @description 最近1天活跃用户数
     * @var string
     */
    public $actUsrCnt1d;

    /**
     * @description 统计日期
     * @var string
     */
    public $statDate;

    /**
     * @description 通讯录人数
     * @var string
     */
    public $mbrCntStd;

    /**
     * @description 最近1天沟通率
     * @var string
     */
    public $sendMsgUserRatio1d;

    /**
     * @description 教育局ID
     * @var string
     */
    public $corpId;

    /**
     * @description 最近7天活跃率
     * @var string
     */
    public $actUsrRatio7d;

    /**
     * @description 最近7天教师钉消息发送数
     * @var string
     */
    public $teacherSendDingCnt7d;

    /**
     * @description 双家长监管学生比率
     * @var string
     */
    public $twoPatriarchStudentRatio;

    /**
     * @description 最近1天钉钉指数
     * @var string
     */
    public $dingIndex1d;

    /**
     * @description 学生数量
     * @var string
     */
    public $studentCntStd;

    /**
     * @description 学校名称
     * @var string
     */
    public $subCorpName;

    /**
     * @description 最近7天班级群使用人数
     * @var string
     */
    public $classGroupUserCnt7d;

    /**
     * @description 最近1天班级打卡使用人数
     * @var string
     */
    public $classCardUserCnt1d;

    /**
     * @description 最近1天成功发起直播次数
     * @var string
     */
    public $liveLaunchSuccCnt1d;

    /**
     * @description 学校id
     * @var string
     */
    public $subCorpId;

    /**
     * @description 最近1天活跃教师数量
     * @var string
     */
    public $actTeacherCnt1d;

    /**
     * @description 教师数量
     * @var string
     */
    public $teacherCntStd;

    /**
     * @description 最近7天班级圈发送数
     * @var string
     */
    public $sendCirclePostCnt7d;

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
     * @description 单家长监管学生比率
     * @var string
     */
    public $singlePatriarchStudentRatio;

    /**
     * @description 双家长监管学生数
     * @var string
     */
    public $twoPatriarchStudentCnt;

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
     * @description 最近7天活跃的班级圈数
     * @var string
     */
    public $actClassCircleCnt7d;

    /**
     * @description 最近7天观看和回看直播人数
     * @var string
     */
    public $livePlayUserCnt7d;

    /**
     * @description 最近1天活跃的班级圈数
     * @var string
     */
    public $actClassCircleCnt1d;

    /**
     * @description 最近1天沟通用户数
     * @var string
     */
    public $sendMsgUserCnt1d;

    /**
     * @description 最近1天活跃的班级群数
     * @var string
     */
    public $actClassGroupCnt1d;

    /**
     * @description 最近1天班级群使用人数
     * @var string
     */
    public $classGroupUserCnt1d;

    /**
     * @description 家长数量
     * @var string
     */
    public $patriarchCntStd;

    /**
     * @description 最近7天沟通率
     * @var string
     */
    public $sendMsgUserRatio7d;

    /**
     * @description 激活率
     * @var string
     */
    public $mbrActiveRatio;

    /**
     * @description 单家长监管学生数
     * @var string
     */
    public $singlePatriarchStudentCnt;

    /**
     * @description 最近7天钉钉指数
     * @var string
     */
    public $dingIndex7d;

    /**
     * @description 最近7天活跃家长数量
     * @var string
     */
    public $actPatriarchCnt7d;

    /**
     * @description 最近1天成功发起直播时长
     * @var string
     */
    public $liveSuccTimeLen1d;

    /**
     * @description 最近1天班级圈使用人数
     * @var string
     */
    public $classCircleUserCnt1d;

    /**
     * @description 多家长监管学生数
     * @var string
     */
    public $multiPatriarchStudentCnt;

    /**
     * @description 最近7天成功发起直播次数
     * @var string
     */
    public $liveLaunchSuccCnt7d;

    /**
     * @description 最近1天观看和回看直播人数
     * @var string
     */
    public $livePlayUserCnt1d;

    /**
     * @description 最近1天接收DING的家长数
     * @var string
     */
    public $rcvDingPatriarchCnt1d;

    /**
     * @description 无家长监管学生数
     * @var string
     */
    public $nonePatriarchStudentCnt;

    /**
     * @description 最近7天班级圈使用人数
     * @var string
     */
    public $classCircleUserCnt7d;

    /**
     * @description 最近7天总活跃用户数
     * @var string
     */
    public $actUsrCnt7d;

    /**
     * @description 最近7天沟通用户数
     * @var string
     */
    public $sendMsgUserCnt7d;

    /**
     * @description 最近7天成功发起直播时长
     * @var string
     */
    public $liveSuccTimeLen7d;

}
