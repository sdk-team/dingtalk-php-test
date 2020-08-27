<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiMaterialArticleResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model {
    protected $_name = [
        'articleId' => 'article_id',
        'title' => 'title',
        'thumbMediaId' => 'thumb_media_id',
        'publishStatus' => 'publish_status',
        'publishTime' => 'publish_time',
        'createTime' => 'create_time',
        'updateTime' => 'update_time',
        'content' => 'content',
        'url' => 'url',
        'digest' => 'digest',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->articleId) {
            $res['article_id'] = $this->articleId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->thumbMediaId) {
            $res['thumb_media_id'] = $this->thumbMediaId;
        }
        if (null !== $this->publishStatus) {
            $res['publish_status'] = $this->publishStatus;
        }
        if (null !== $this->publishTime) {
            $res['publish_time'] = $this->publishTime;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['update_time'] = $this->updateTime;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->digest) {
            $res['digest'] = $this->digest;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['article_id'])){
            $model->articleId = $map['article_id'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['thumb_media_id'])){
            $model->thumbMediaId = $map['thumb_media_id'];
        }
        if(isset($map['publish_status'])){
            $model->publishStatus = $map['publish_status'];
        }
        if(isset($map['publish_time'])){
            $model->publishTime = $map['publish_time'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['update_time'])){
            $model->updateTime = $map['update_time'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['digest'])){
            $model->digest = $map['digest'];
        }
        return $model;
    }
    /**
     * @description 文章id
     * @var int
     */
    public $articleId;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 封面图
     * @var string
     */
    public $thumbMediaId;

    /**
     * @description 发布状态
     * @var int
     */
    public $publishStatus;

    /**
     * @description 发布时间
     * @var int
     */
    public $publishTime;

    /**
     * @description 创建时间
     * @var int
     */
    public $createTime;

    /**
     * @description 更新时间
     * @var int
     */
    public $updateTime;

    /**
     * @description 内容
     * @var string
     */
    public $content;

    /**
     * @description 链接
     * @var string
     */
    public $url;

    /**
     * @description 摘要
     * @var string
     */
    public $digest;

}
