<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiEduHomeworkTopicParams;

use AlibabaCloud\Tea\Model;

class topicItems extends Model {
    protected $_name = [
        'point' => 'point',
        'analysis' => 'analysis',
        'answer' => 'answer',
        'questionContent' => 'question_content',
        'questionType' => 'question_type',
        'questionId' => 'question_id',
        'bizCode' => 'biz_code',
        'attributes' => 'attributes',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->point) {
            $res['point'] = $this->point;
        }
        if (null !== $this->analysis) {
            $res['analysis'] = $this->analysis;
        }
        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }
        if (null !== $this->questionContent) {
            $res['question_content'] = $this->questionContent;
        }
        if (null !== $this->questionType) {
            $res['question_type'] = $this->questionType;
        }
        if (null !== $this->questionId) {
            $res['question_id'] = $this->questionId;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return topicItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['point'])){
            $model->point = $map['point'];
        }
        if(isset($map['analysis'])){
            $model->analysis = $map['analysis'];
        }
        if(isset($map['answer'])){
            $model->answer = $map['answer'];
        }
        if(isset($map['question_content'])){
            $model->questionContent = $map['question_content'];
        }
        if(isset($map['question_type'])){
            $model->questionType = $map['question_type'];
        }
        if(isset($map['question_id'])){
            $model->questionId = $map['question_id'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        return $model;
    }
    /**
     * @description 知识点
     * @var string
     */
    public $point;

    /**
     * @description 解析
     * @var string
     */
    public $analysis;

    /**
     * @description 答案
     * @var string
     */
    public $answer;

    /**
     * @description 题目内容
     * @var string
     */
    public $questionContent;

    /**
     * @description 题目类型
     * @var string
     */
    public $questionType;

    /**
     * @description 题目ID
     * @var string
     */
    public $questionId;

    /**
     * @description 业务编码
     * @var string
     */
    public $bizCode;

    /**
     * @description 扩展属性
     * @var string
     */
    public $attributes;

}
