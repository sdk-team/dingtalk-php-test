<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\originMail;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeFile;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param\resumeDetailInfo;

class param extends Model {
    protected $_name = [
        'originMail' => 'origin_mail',
        'resumeFile' => 'resume_file',
        'channel' => 'channel',
        'matchedJobs' => 'matched_jobs',
        'resumeDetailInfo' => 'resume_detail_info',
    ];
    public function validate() {
        Model::validateRequired('channel', $this->channel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->originMail) {
            $res['origin_mail'] = null !== $this->originMail ? $this->originMail->toMap() : null;
        }
        if (null !== $this->resumeFile) {
            $res['resume_file'] = null !== $this->resumeFile ? $this->resumeFile->toMap() : null;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->matchedJobs) {
            $res['matched_jobs'] = $this->matchedJobs;
        }
        if (null !== $this->resumeDetailInfo) {
            $res['resume_detail_info'] = null !== $this->resumeDetailInfo ? $this->resumeDetailInfo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['origin_mail'])){
            $model->originMail = originMail::fromMap($map['origin_mail']);
        }
        if(isset($map['resume_file'])){
            $model->resumeFile = resumeFile::fromMap($map['resume_file']);
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['matched_jobs'])){
            if(!empty($map['matched_jobs'])){
                $model->matchedJobs = $map['matched_jobs'];
            }
        }
        if(isset($map['resume_detail_info'])){
            $model->resumeDetailInfo = resumeDetailInfo::fromMap($map['resume_detail_info']);
        }
        return $model;
    }
    /**
     * @description 原始邮件信息，可选
     * @var originMail
     */
    public $originMail;

    /**
     * @description 简历文件信息
     * @var resumeFile
     */
    public $resumeFile;

    /**
     * @description 渠道来源，接入前请提前沟通
     * @var string
     */
    public $channel;

    /**
     * @description 匹配到的职位列表
     * @var array
     */
    public $matchedJobs;

    /**
     * @description 结构化的简历详情
     * @var resumeDetailInfo
     */
    public $resumeDetailInfo;

}
