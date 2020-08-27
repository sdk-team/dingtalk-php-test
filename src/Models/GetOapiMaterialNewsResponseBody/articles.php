<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiMaterialNewsResponseBody;

use AlibabaCloud\Tea\Model;

class articles extends Model {
    protected $_name = [
        'articleId' => 'article_id',
        'title' => 'title',
        'content' => 'content',
        'thumbMediaId' => 'thumb_media_id',
        'publishStatus' => 'publish_status',
        'publishTime' => 'publish_time',
        'userViewCount' => 'user_view_count',
        'totalViewCount' => 'total_view_count',
        'createTime' => 'create_time',
        'updateTime' => 'update_time',
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
        if (null !== $this->content) {
            $res['content'] = $this->content;
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
        if (null !== $this->userViewCount) {
            $res['user_view_count'] = $this->userViewCount;
        }
        if (null !== $this->totalViewCount) {
            $res['total_view_count'] = $this->totalViewCount;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['update_time'] = $this->updateTime;
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
     * @return articles
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['article_id'])){
            $model->articleId = $map['article_id'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
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
        if(isset($map['user_view_count'])){
            $model->userViewCount = $map['user_view_count'];
        }
        if(isset($map['total_view_count'])){
            $model->totalViewCount = $map['total_view_count'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['update_time'])){
            $model->updateTime = $map['update_time'];
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
     * @description 文章内容
     * @var string
     */
    public $content;

    /**
     * @description 封面图片的素材id
     * @var string
     */
    public $thumbMediaId;

    /**
     * @description publish_status，发布状态，0 未发布，1 已发布。文章第一次发布后，状态置为1，已发布文章支持修改，修改后此状态保持为1，每次修改文章后需要再次发布内容才会生效。
     * @var int
     */
    public $publishStatus;

    /**
     * @description 发布时间
     * @var int
     */
    public $publishTime;

    /**
     * @description 已读用户数
     * @var int
     */
    public $userViewCount;

    /**
     * @description 阅读次数
     * @var int
     */
    public $totalViewCount;

    /**
     * @description 文章创建时间
     * @var int
     */
    public $createTime;

    /**
     * @description 文章更新时间
     * @var int
     */
    public $updateTime;

    /**
     * @description 文章链接
     * @var string
     */
    public $url;

    /**
     * @description 摘要
     * @var string
     */
    public $digest;

}
