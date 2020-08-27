<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeDetailInfo;

use AlibabaCloud\Tea\Model;

class educationInfoList extends Model {
    protected $_name = [
        'startDate' => 'start_date',
        'endDate' => 'end_date',
        'school' => 'school',
        'speciality' => 'speciality',
        'education' => 'education',
        'summary' => 'summary',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }
        if (null !== $this->school) {
            $res['school'] = $this->school;
        }
        if (null !== $this->speciality) {
            $res['speciality'] = $this->speciality;
        }
        if (null !== $this->education) {
            $res['education'] = $this->education;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return educationInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
        if(isset($map['end_date'])){
            $model->endDate = $map['end_date'];
        }
        if(isset($map['school'])){
            $model->school = $map['school'];
        }
        if(isset($map['speciality'])){
            $model->speciality = $map['speciality'];
        }
        if(isset($map['education'])){
            $model->education = $map['education'];
        }
        if(isset($map['summary'])){
            $model->summary = $map['summary'];
        }
        return $model;
    }
    /**
     * @description 开始时间
     * @var string
     */
    public $startDate;

    /**
     * @description 结束时间
     * @var string
     */
    public $endDate;

    /**
     * @description 学校名称
     * @var string
     */
    public $school;

    /**
     * @description 专业
     * @var string
     */
    public $speciality;

    /**
     * @description 学历
     * @var string
     */
    public $education;

    /**
     * @description 详细介绍
     * @var string
     */
    public $summary;

}
