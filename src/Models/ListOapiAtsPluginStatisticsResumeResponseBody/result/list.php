<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAtsPluginStatisticsResumeResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'corpId' => 'corp_id',
        'resumeId' => 'resume_id',
        'channel' => 'channel',
        'candidateId' => 'candidate_id',
        'gmtCreateMils' => 'gmt_create_mils',
        'gmtModifiedMils' => 'gmt_modified_mils',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->resumeId) {
            $res['resume_id'] = $this->resumeId;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->candidateId) {
            $res['candidate_id'] = $this->candidateId;
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
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['resume_id'])){
            $model->resumeId = $map['resume_id'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['candidate_id'])){
            $model->candidateId = $map['candidate_id'];
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
     * @description 招聘业务标识
     * @var string
     */
    public $bizCode;

    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

    /**
     * @description 简历id
     * @var string
     */
    public $resumeId;

    /**
     * @description lagou,51job,58tongcheng,zhilian,liepin,boss,other
     * @var string
     */
    public $channel;

    /**
     * @description 候选人id
     * @var string
     */
    public $candidateId;

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
