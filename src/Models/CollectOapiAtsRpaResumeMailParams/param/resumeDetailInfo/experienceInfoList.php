<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeDetailInfo;

use AlibabaCloud\Tea\Model;

class experienceInfoList extends Model {
    protected $_name = [
        'startDate' => 'start_date',
        'endDate' => 'end_date',
        'company' => 'company',
        'title' => 'title',
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
        if (null !== $this->company) {
            $res['company'] = $this->company;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return experienceInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
        if(isset($map['end_date'])){
            $model->endDate = $map['end_date'];
        }
        if(isset($map['company'])){
            $model->company = $map['company'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
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
     * @description 公司名称
     * @var string
     */
    public $company;

    /**
     * @description 职位名称
     * @var string
     */
    public $title;

    /**
     * @description 工作内容
     * @var string
     */
    public $summary;

}
