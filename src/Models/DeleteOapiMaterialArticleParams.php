<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiMaterialArticleParams extends Model {
    protected $_name = [
        'unionid' => 'unionid',
        'articleId' => 'article_id',
    ];
    public function validate() {
        Model::validateRequired('unionid', $this->unionid, true);
        Model::validateRequired('articleId', $this->articleId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->articleId) {
            $res['article_id'] = $this->articleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiMaterialArticleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['article_id'])){
            $model->articleId = $map['article_id'];
        }
        return $model;
    }
    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

    /**
     * @description 文章id
     * @var int
     */
    public $articleId;

}
