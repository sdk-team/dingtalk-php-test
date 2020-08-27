<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeDetailInfo\educationInfoList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeDetailInfo\experienceInfoList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeDetailInfo\trainingInfoList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeDetailInfo\projectInfoList;

class resumeDetailInfo extends Model {
    protected $_name = [
        'name' => 'name',
        'phoneNum' => 'phone_num',
        'email' => 'email',
        'sex' => 'sex',
        'birth' => 'birth',
        'graduateTime' => 'graduate_time',
        'beginWorkTime' => 'begin_work_time',
        'nationality' => 'nationality',
        'married' => 'married',
        'nativePlace' => 'native_place',
        'nowLocation' => 'now_location',
        'forwardLocation' => 'forward_location',
        'school' => 'school',
        'education' => 'education',
        'advancedDegree' => 'advanced_degree',
        'studentType' => 'student_type',
        'schoolType' => 'school_type',
        'speciality' => 'speciality',
        'salary' => 'salary',
        'aimSalary' => 'aim_salary',
        'titleStandard' => 'title_standard',
        'vocationStandard' => 'vocation_standard',
        'political' => 'political',
        'jobStatus' => 'job_status',
        'gradeOfEnglish' => 'grade_of_english',
        'educationInfoList' => 'education_info_list',
        'experienceInfoList' => 'experience_info_list',
        'trainingInfoList' => 'training_info_list',
        'projectInfoList' => 'project_info_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->phoneNum) {
            $res['phone_num'] = $this->phoneNum;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->sex) {
            $res['sex'] = $this->sex;
        }
        if (null !== $this->birth) {
            $res['birth'] = $this->birth;
        }
        if (null !== $this->graduateTime) {
            $res['graduate_time'] = $this->graduateTime;
        }
        if (null !== $this->beginWorkTime) {
            $res['begin_work_time'] = $this->beginWorkTime;
        }
        if (null !== $this->nationality) {
            $res['nationality'] = $this->nationality;
        }
        if (null !== $this->married) {
            $res['married'] = $this->married;
        }
        if (null !== $this->nativePlace) {
            $res['native_place'] = $this->nativePlace;
        }
        if (null !== $this->nowLocation) {
            $res['now_location'] = $this->nowLocation;
        }
        if (null !== $this->forwardLocation) {
            $res['forward_location'] = $this->forwardLocation;
        }
        if (null !== $this->school) {
            $res['school'] = $this->school;
        }
        if (null !== $this->education) {
            $res['education'] = $this->education;
        }
        if (null !== $this->advancedDegree) {
            $res['advanced_degree'] = $this->advancedDegree;
        }
        if (null !== $this->studentType) {
            $res['student_type'] = $this->studentType;
        }
        if (null !== $this->schoolType) {
            $res['school_type'] = $this->schoolType;
        }
        if (null !== $this->speciality) {
            $res['speciality'] = $this->speciality;
        }
        if (null !== $this->salary) {
            $res['salary'] = $this->salary;
        }
        if (null !== $this->aimSalary) {
            $res['aim_salary'] = $this->aimSalary;
        }
        if (null !== $this->titleStandard) {
            $res['title_standard'] = $this->titleStandard;
        }
        if (null !== $this->vocationStandard) {
            $res['vocation_standard'] = $this->vocationStandard;
        }
        if (null !== $this->political) {
            $res['political'] = $this->political;
        }
        if (null !== $this->jobStatus) {
            $res['job_status'] = $this->jobStatus;
        }
        if (null !== $this->gradeOfEnglish) {
            $res['grade_of_english'] = $this->gradeOfEnglish;
        }
        if (null !== $this->educationInfoList) {
            $res['education_info_list'] = [];
            if(null !== $this->educationInfoList && is_array($this->educationInfoList)){
                $n = 0;
                foreach($this->educationInfoList as $item){
                    $res['education_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->experienceInfoList) {
            $res['experience_info_list'] = [];
            if(null !== $this->experienceInfoList && is_array($this->experienceInfoList)){
                $n = 0;
                foreach($this->experienceInfoList as $item){
                    $res['experience_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trainingInfoList) {
            $res['training_info_list'] = [];
            if(null !== $this->trainingInfoList && is_array($this->trainingInfoList)){
                $n = 0;
                foreach($this->trainingInfoList as $item){
                    $res['training_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectInfoList) {
            $res['project_info_list'] = [];
            if(null !== $this->projectInfoList && is_array($this->projectInfoList)){
                $n = 0;
                foreach($this->projectInfoList as $item){
                    $res['project_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resumeDetailInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['phone_num'])){
            $model->phoneNum = $map['phone_num'];
        }
        if(isset($map['email'])){
            $model->email = $map['email'];
        }
        if(isset($map['sex'])){
            $model->sex = $map['sex'];
        }
        if(isset($map['birth'])){
            $model->birth = $map['birth'];
        }
        if(isset($map['graduate_time'])){
            $model->graduateTime = $map['graduate_time'];
        }
        if(isset($map['begin_work_time'])){
            $model->beginWorkTime = $map['begin_work_time'];
        }
        if(isset($map['nationality'])){
            $model->nationality = $map['nationality'];
        }
        if(isset($map['married'])){
            $model->married = $map['married'];
        }
        if(isset($map['native_place'])){
            $model->nativePlace = $map['native_place'];
        }
        if(isset($map['now_location'])){
            $model->nowLocation = $map['now_location'];
        }
        if(isset($map['forward_location'])){
            $model->forwardLocation = $map['forward_location'];
        }
        if(isset($map['school'])){
            $model->school = $map['school'];
        }
        if(isset($map['education'])){
            $model->education = $map['education'];
        }
        if(isset($map['advanced_degree'])){
            $model->advancedDegree = $map['advanced_degree'];
        }
        if(isset($map['student_type'])){
            $model->studentType = $map['student_type'];
        }
        if(isset($map['school_type'])){
            $model->schoolType = $map['school_type'];
        }
        if(isset($map['speciality'])){
            $model->speciality = $map['speciality'];
        }
        if(isset($map['salary'])){
            $model->salary = $map['salary'];
        }
        if(isset($map['aim_salary'])){
            $model->aimSalary = $map['aim_salary'];
        }
        if(isset($map['title_standard'])){
            $model->titleStandard = $map['title_standard'];
        }
        if(isset($map['vocation_standard'])){
            $model->vocationStandard = $map['vocation_standard'];
        }
        if(isset($map['political'])){
            $model->political = $map['political'];
        }
        if(isset($map['job_status'])){
            $model->jobStatus = $map['job_status'];
        }
        if(isset($map['grade_of_english'])){
            $model->gradeOfEnglish = $map['grade_of_english'];
        }
        if(isset($map['education_info_list'])){
            if(!empty($map['education_info_list'])){
                $model->educationInfoList = [];
                $n = 0;
                foreach($map['education_info_list'] as $item) {
                    $model->educationInfoList[$n++] = null !== $item ? educationInfoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['experience_info_list'])){
            if(!empty($map['experience_info_list'])){
                $model->experienceInfoList = [];
                $n = 0;
                foreach($map['experience_info_list'] as $item) {
                    $model->experienceInfoList[$n++] = null !== $item ? experienceInfoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['training_info_list'])){
            if(!empty($map['training_info_list'])){
                $model->trainingInfoList = [];
                $n = 0;
                foreach($map['training_info_list'] as $item) {
                    $model->trainingInfoList[$n++] = null !== $item ? trainingInfoList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['project_info_list'])){
            if(!empty($map['project_info_list'])){
                $model->projectInfoList = [];
                $n = 0;
                foreach($map['project_info_list'] as $item) {
                    $model->projectInfoList[$n++] = null !== $item ? projectInfoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 姓名，必传
     * @var string
     */
    public $name;

    /**
     * @description 电话，必传
     * @var string
     */
    public $phoneNum;

    /**
     * @description 邮箱地址
     * @var string
     */
    public $email;

    /**
     * @description 男性，女性
     * @var string
     */
    public $sex;

    /**
     * @description 出生日期
     * @var string
     */
    public $birth;

    /**
     * @description 毕业时间
     * @var string
     */
    public $graduateTime;

    /**
     * @description 开始工作时间
     * @var string
     */
    public $beginWorkTime;

    /**
     * @description 国籍
     * @var string
     */
    public $nationality;

    /**
     * @description 已婚，未婚，离婚
     * @var string
     */
    public $married;

    /**
     * @description 籍贯
     * @var string
     */
    public $nativePlace;

    /**
     * @description 先居住地
     * @var string
     */
    public $nowLocation;

    /**
     * @description 期望工作地
     * @var string
     */
    public $forwardLocation;

    /**
     * @description 毕业院校
     * @var string
     */
    public $school;

    /**
     * @description 小学，初中，高中，中专，大专，本科，硕士，博士，其他
     * @var string
     */
    public $education;

    /**
     * @description 学位
     * @var string
     */
    public $advancedDegree;

    /**
     * @description 学历情况
     * @var string
     */
    public $studentType;

    /**
     * @description 学校类别
     * @var string
     */
    public $schoolType;

    /**
     * @description 专业
     * @var string
     */
    public $speciality;

    /**
     * @description 当前薪资
     * @var string
     */
    public $salary;

    /**
     * @description 期望薪资
     * @var string
     */
    public $aimSalary;

    /**
     * @description 职位名称
     * @var string
     */
    public $titleStandard;

    /**
     * @description 行业名称
     * @var string
     */
    public $vocationStandard;

    /**
     * @description 政治面貌
     * @var string
     */
    public $political;

    /**
     * @description 求职状态
     * @var string
     */
    public $jobStatus;

    /**
     * @description 英语等级
     * @var string
     */
    public $gradeOfEnglish;

    /**
     * @description 教育经历
     * @var array
     */
    public $educationInfoList;

    /**
     * @description 工作经历
     * @var array
     */
    public $experienceInfoList;

    /**
     * @description 培训经历
     * @var array
     */
    public $trainingInfoList;

    /**
     * @description 项目经历
     * @var array
     */
    public $projectInfoList;

}
