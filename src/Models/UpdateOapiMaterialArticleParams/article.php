<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiMaterialArticleParams;

use AlibabaCloud\Tea\Model;

class article extends Model {
    protected $_name = [
        'thumbMediaId' => 'thumb_media_id',
        'content' => 'content',
        'title' => 'title',
        'articleId' => 'article_id',
        'digest' => 'digest',
    ];
    public function validate() {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('articleId', $this->articleId, true);
        Model::validateMaxLength('content', $this->content, 65535);
        Model::validateMaxLength('title', $this->title, 30);
        Model::validateMaxLength('digest', $this->digest, 128);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->thumbMediaId) {
            $res['thumb_media_id'] = $this->thumbMediaId;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->articleId) {
            $res['article_id'] = $this->articleId;
        }
        if (null !== $this->digest) {
            $res['digest'] = $this->digest;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return article
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['thumb_media_id'])){
            $model->thumbMediaId = $map['thumb_media_id'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['article_id'])){
            $model->articleId = $map['article_id'];
        }
        if(isset($map['digest'])){
            $model->digest = $map['digest'];
        }
        return $model;
    }
    /**
     * @description 封面图
     * @var string
     */
    public $thumbMediaId;

    /**
     * @description html码
     * @var string
     */
    public $content;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 文章id
     * @var int
     */
    public $articleId;

    /**
     * @description 摘要
     * @var string
     */
    public $digest;

}
