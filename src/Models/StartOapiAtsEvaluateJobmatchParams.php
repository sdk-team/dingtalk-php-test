<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class StartOapiAtsEvaluateJobmatchParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'outerEvaluateId' => 'outer_evaluate_id',
        'inviteUrl' => 'invite_url',
        'resultUrl' => 'result_url',
        'candidateId' => 'candidate_id',
        'jobId' => 'job_id',
        'extData' => 'ext_data',
        'category' => 'category',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('outerEvaluateId', $this->outerEvaluateId, true);
        Model::validateRequired('inviteUrl', $this->inviteUrl, true);
        Model::validateRequired('resultUrl', $this->resultUrl, true);
        Model::validateRequired('candidateId', $this->candidateId, true);
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('extData', $this->extData, true);
        Model::validateRequired('category', $this->category, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->outerEvaluateId) {
            $res['outer_evaluate_id'] = $this->outerEvaluateId;
        }
        if (null !== $this->inviteUrl) {
            $res['invite_url'] = $this->inviteUrl;
        }
        if (null !== $this->resultUrl) {
            $res['result_url'] = $this->resultUrl;
        }
        if (null !== $this->candidateId) {
            $res['candidate_id'] = $this->candidateId;
        }
        if (null !== $this->jobId) {
            $res['job_id'] = $this->jobId;
        }
        if (null !== $this->extData) {
            $res['ext_data'] = $this->extData;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return StartOapiAtsEvaluateJobmatchParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['outer_evaluate_id'])){
            $model->outerEvaluateId = $map['outer_evaluate_id'];
        }
        if(isset($map['invite_url'])){
            $model->inviteUrl = $map['invite_url'];
        }
        if(isset($map['result_url'])){
            $model->resultUrl = $map['result_url'];
        }
        if(isset($map['candidate_id'])){
            $model->candidateId = $map['candidate_id'];
        }
        if(isset($map['job_id'])){
            $model->jobId = $map['job_id'];
        }
        if(isset($map['ext_data'])){
            $model->extData = $map['ext_data'];
        }
        if(isset($map['category'])){
            $model->category = $map['category'];
        }
        return $model;
    }
    /**
     * @description 招聘业务标识
     * @var string
     */
    public $bizCode;

    /**
     * @description 外部测评系统的具体某一次测评的id，全局唯一
     * @var string
     */
    public $outerEvaluateId;

    /**
     * @description 邀请填写测评的url
     * @var string
     */
    public $inviteUrl;

    /**
     * @description 测评结果的url
     * @var string
     */
    public $resultUrl;

    /**
     * @description 候选人id
     * @var string
     */
    public $candidateId;

    /**
     * @description 候选人id
     * @var string
     */
    public $jobId;

    /**
     * @description json格式的字符串，存放请求扩展信息
     * @var string
     */
    public $extData;

    /**
     * @description 职位类型码，调用时请申请职位类型码表
     * @var string
     */
    public $category;

}
