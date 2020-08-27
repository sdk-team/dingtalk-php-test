<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeDetailInfo;

use AlibabaCloud\Tea\Model;

class projectInfoList extends Model {
    protected $_name = [
        'startDate' => 'start_date',
        'endDate' => 'end_date',
        'projectName' => 'project_name',
        'projectDescription' => 'project_description',
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
        if (null !== $this->projectName) {
            $res['project_name'] = $this->projectName;
        }
        if (null !== $this->projectDescription) {
            $res['project_description'] = $this->projectDescription;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return projectInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
        if(isset($map['end_date'])){
            $model->endDate = $map['end_date'];
        }
        if(isset($map['project_name'])){
            $model->projectName = $map['project_name'];
        }
        if(isset($map['project_description'])){
            $model->projectDescription = $map['project_description'];
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
     * @description 项目名称
     * @var string
     */
    public $projectName;

    /**
     * @description 项目描述
     * @var string
     */
    public $projectDescription;

}
