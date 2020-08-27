<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeDetailInfo;

use AlibabaCloud\Tea\Model;

class trainingInfoList extends Model {
    protected $_name = [
        'startDate' => 'start_date',
        'endDate' => 'end_date',
        'trainingInstitution' => 'training_institution',
        'certificate' => 'certificate',
        'descriptionInDetails' => 'description_in_details',
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
        if (null !== $this->trainingInstitution) {
            $res['training_institution'] = $this->trainingInstitution;
        }
        if (null !== $this->certificate) {
            $res['certificate'] = $this->certificate;
        }
        if (null !== $this->descriptionInDetails) {
            $res['description_in_details'] = $this->descriptionInDetails;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return trainingInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['start_date'])){
            $model->startDate = $map['start_date'];
        }
        if(isset($map['end_date'])){
            $model->endDate = $map['end_date'];
        }
        if(isset($map['training_institution'])){
            $model->trainingInstitution = $map['training_institution'];
        }
        if(isset($map['certificate'])){
            $model->certificate = $map['certificate'];
        }
        if(isset($map['description_in_details'])){
            $model->descriptionInDetails = $map['description_in_details'];
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
     * @description 培训机构名称
     * @var string
     */
    public $trainingInstitution;

    /**
     * @description 所获证书
     * @var string
     */
    public $certificate;

    /**
     * @description 培训详情
     * @var string
     */
    public $descriptionInDetails;

}
