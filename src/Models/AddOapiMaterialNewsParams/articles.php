<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiMaterialNewsParams;

use AlibabaCloud\Tea\Model;

class articles extends Model {
    protected $_name = [
        'articleId' => 'article_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->articleId) {
            $res['article_id'] = $this->articleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return articles
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['article_id'])){
            $model->articleId = $map['article_id'];
        }
        return $model;
    }
    /**
     * @description 文章id
     * @var int
     */
    public $articleId;

}
