<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiMaterialArticleParams;

use AlibabaCloud\Tea\Model;

class article extends Model {
    protected $_name = [
        'thumbMediaId' => 'thumb_media_id',
        'content' => 'content',
        'title' => 'title',
        'uuid' => 'uuid',
        'digest' => 'digest',
    ];
    public function validate() {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('uuid', $this->uuid, true);
        Model::validateMaxLength('content', $this->content, 65535);
        Model::validateMaxLength('title', $this->title, 64);
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
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
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
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['digest'])){
            $model->digest = $map['digest'];
        }
        return $model;
    }
    /**
     * @description 图文消息的封面图片素材id
     * @var string
     */
    public $thumbMediaId;

    /**
     * @description 文章内容（html码）
     * @var string
     */
    public $content;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 幂等参数
     * @var string
     */
    public $uuid;

    /**
     * @description 摘要
     * @var string
     */
    public $digest;

}
