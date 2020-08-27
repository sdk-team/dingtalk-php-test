<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiHireStatisticsBizflowResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'corpId' => 'corp_id',
        'flowId' => 'flow_id',
        'candidateId' => 'candidate_id',
        'resumeId' => 'resume_id',
        'jobId' => 'job_id',
        'flowStatus' => 'flow_status',
        'recruitId' => 'recruit_id',
        'ownerUserid' => 'owner_userid',
        'creatorUserid' => 'creator_userid',
        'gmtCreateMils' => 'gmt_create_mils',
        'gmtModifiedMils' => 'gmt_modified_mils',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->flowId) {
            $res['flow_id'] = $this->flowId;
        }
        if (null !== $this->candidateId) {
            $res['candidate_id'] = $this->candidateId;
        }
        if (null !== $this->resumeId) {
            $res['resume_id'] = $this->resumeId;
        }
        if (null !== $this->jobId) {
            $res['job_id'] = $this->jobId;
        }
        if (null !== $this->flowStatus) {
            $res['flow_status'] = $this->flowStatus;
        }
        if (null !== $this->recruitId) {
            $res['recruit_id'] = $this->recruitId;
        }
        if (null !== $this->ownerUserid) {
            $res['owner_userid'] = $this->ownerUserid;
        }
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->gmtCreateMils) {
            $res['gmt_create_mils'] = $this->gmtCreateMils;
        }
        if (null !== $this->gmtModifiedMils) {
            $res['gmt_modified_mils'] = $this->gmtModifiedMils;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['flow_id'])){
            $model->flowId = $map['flow_id'];
        }
        if(isset($map['candidate_id'])){
            $model->candidateId = $map['candidate_id'];
        }
        if(isset($map['resume_id'])){
            $model->resumeId = $map['resume_id'];
        }
        if(isset($map['job_id'])){
            $model->jobId = $map['job_id'];
        }
        if(isset($map['flow_status'])){
            $model->flowStatus = $map['flow_status'];
        }
        if(isset($map['recruit_id'])){
            $model->recruitId = $map['recruit_id'];
        }
        if(isset($map['owner_userid'])){
            $model->ownerUserid = $map['owner_userid'];
        }
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['gmt_create_mils'])){
            $model->gmtCreateMils = $map['gmt_create_mils'];
        }
        if(isset($map['gmt_modified_mils'])){
            $model->gmtModifiedMils = $map['gmt_modified_mils'];
        }
        return $model;
    }
    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

    /**
     * @description 应聘流程id
     * @var string
     */
    public $flowId;

    /**
     * @description 候选人id
     * @var string
     */
    public $candidateId;

    /**
     * @description 简历id
     * @var string
     */
    public $resumeId;

    /**
     * @description 职位id
     * @var string
     */
    public $jobId;

    /**
     * @description 应聘状态  11：待初筛  12：初筛通过 13：初筛不通过  21： 应聘流程中  22：应聘通过  23：应聘不通过(不录用)  31： offer流程中  32： offer通过(录用)  33：offer失败  34： offer取消(取消录用)  41：待入职  42：已入职
     * @var int
     */
    public $flowStatus;

    /**
     * @description 应聘id
     * @var string
     */
    public $recruitId;

    /**
     * @description 负责人userid
     * @var string
     */
    public $ownerUserid;

    /**
     * @description 创建人userid
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 创建时间，unix时间戳，单位毫秒
     * @var int
     */
    public $gmtCreateMils;

    /**
     * @description 更新时间，unix时间戳，单位毫秒
     * @var int
     */
    public $gmtModifiedMils;

}
