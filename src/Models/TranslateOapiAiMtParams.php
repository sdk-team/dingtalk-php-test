<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class TranslateOapiAiMtParams extends Model {
    protected $_name = [
        'query' => 'query',
        'sourceLanguage' => 'source_language',
        'targetLanguage' => 'target_language',
    ];
    public function validate() {
        Model::validateRequired('query', $this->query, true);
        Model::validateRequired('sourceLanguage', $this->sourceLanguage, true);
        Model::validateRequired('targetLanguage', $this->targetLanguage, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->sourceLanguage) {
            $res['source_language'] = $this->sourceLanguage;
        }
        if (null !== $this->targetLanguage) {
            $res['target_language'] = $this->targetLanguage;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TranslateOapiAiMtParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['query'])){
            $model->query = $map['query'];
        }
        if(isset($map['source_language'])){
            $model->sourceLanguage = $map['source_language'];
        }
        if(isset($map['target_language'])){
            $model->targetLanguage = $map['target_language'];
        }
        return $model;
    }
    /**
     * @description 翻译源文字符串
     * @var string
     */
    public $query;

    /**
     * @description 翻译源语言类型
     * @var string
     */
    public $sourceLanguage;

    /**
     * @description 翻译目标语言类型
     * @var string
     */
    public $targetLanguage;

}
