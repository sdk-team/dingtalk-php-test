<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiMaterialArticleParams\article;

class UpdateOapiMaterialArticleParams extends Model {
    protected $_name = [
        'article' => 'article',
        'unionid' => 'unionid',
    ];
    public function validate() {
        Model::validateRequired('article', $this->article, true);
        Model::validateRequired('unionid', $this->unionid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->article) {
            $res['article'] = null !== $this->article ? $this->article->toMap() : null;
        }
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiMaterialArticleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['article'])){
            $model->article = article::fromMap($map['article']);
        }
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        return $model;
    }
    /**
     * @description 文章对象
     * @var article
     */
    public $article;

    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

}
