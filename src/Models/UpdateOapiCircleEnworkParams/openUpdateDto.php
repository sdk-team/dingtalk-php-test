<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCircleEnworkParams;

use AlibabaCloud\Tea\Model;

class openUpdateDto extends Model {
    protected $_name = [
        'similarity' => 'similarity',
        'versionId' => 'version_id',
        'pigaiAnalysis' => 'pigai_analysis',
        'openId' => 'open_id',
        'postId' => 'post_id',
        'workId' => 'work_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->similarity) {
            $res['similarity'] = $this->similarity;
        }
        if (null !== $this->versionId) {
            $res['version_id'] = $this->versionId;
        }
        if (null !== $this->pigaiAnalysis) {
            $res['pigai_analysis'] = $this->pigaiAnalysis;
        }
        if (null !== $this->openId) {
            $res['open_id'] = $this->openId;
        }
        if (null !== $this->postId) {
            $res['post_id'] = $this->postId;
        }
        if (null !== $this->workId) {
            $res['work_id'] = $this->workId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return openUpdateDto
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['similarity'])){
            $model->similarity = $map['similarity'];
        }
        if(isset($map['version_id'])){
            $model->versionId = $map['version_id'];
        }
        if(isset($map['pigai_analysis'])){
            $model->pigaiAnalysis = $map['pigai_analysis'];
        }
        if(isset($map['open_id'])){
            $model->openId = $map['open_id'];
        }
        if(isset($map['post_id'])){
            $model->postId = $map['post_id'];
        }
        if(isset($map['work_id'])){
            $model->workId = $map['work_id'];
        }
        return $model;
    }
    /**
     * @description 相似度结果
     * @var string
     */
    public $similarity;

    /**
     * @description 作文id
     * @var int
     */
    public $versionId;

    /**
     * @description 作文批改结果
     * @var string
     */
    public $pigaiAnalysis;

    /**
     * @description 用户id
     * @var string
     */
    public $openId;

    /**
     * @description 作文id
     * @var string
     */
    public $postId;

    /**
     * @description 作业id
     * @var string
     */
    public $workId;

}
