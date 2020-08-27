<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class FinishOapiAtsEvaluateJobmatchParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'score' => 'score',
        'result' => 'result',
        'reportDownloadUrl' => 'report_download_url',
        'extData' => 'ext_data',
        'outerEvaluateId' => 'outer_evaluate_id',
        'conclusion' => 'conclusion',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('result', $this->result, true);
        Model::validateRequired('reportDownloadUrl', $this->reportDownloadUrl, true);
        Model::validateRequired('extData', $this->extData, true);
        Model::validateRequired('outerEvaluateId', $this->outerEvaluateId, true);
        Model::validateRequired('conclusion', $this->conclusion, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->reportDownloadUrl) {
            $res['report_download_url'] = $this->reportDownloadUrl;
        }
        if (null !== $this->extData) {
            $res['ext_data'] = $this->extData;
        }
        if (null !== $this->outerEvaluateId) {
            $res['outer_evaluate_id'] = $this->outerEvaluateId;
        }
        if (null !== $this->conclusion) {
            $res['conclusion'] = $this->conclusion;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return FinishOapiAtsEvaluateJobmatchParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['score'])){
            $model->score = $map['score'];
        }
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        if(isset($map['report_download_url'])){
            $model->reportDownloadUrl = $map['report_download_url'];
        }
        if(isset($map['ext_data'])){
            $model->extData = $map['ext_data'];
        }
        if(isset($map['outer_evaluate_id'])){
            $model->outerEvaluateId = $map['outer_evaluate_id'];
        }
        if(isset($map['conclusion'])){
            $model->conclusion = $map['conclusion'];
        }
        return $model;
    }
    /**
     * @description 招聘业务标识
     * @var string
     */
    public $bizCode;

    /**
     * @description 岗位匹配得分，小数点后保留2位
     * @var string
     */
    public $score;

    /**
     * @description json格式的测评结果
     * @var string
     */
    public $result;

    /**
     * @description 公网可以下载，不需要鉴权的评测报告下载地址，最大长度1024
     * @var string
     */
    public $reportDownloadUrl;

    /**
     * @description 请求扩展字段
     * @var string
     */
    public $extData;

    /**
     * @description 外部测评系统测评记录id，全局唯一
     * @var string
     */
    public $outerEvaluateId;

    /**
     * @description 测评结论
     * @var string
     */
    public $conclusion;

}
