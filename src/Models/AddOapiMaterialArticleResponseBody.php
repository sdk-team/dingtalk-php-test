<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddOapiMaterialArticleResponseBody extends Model {
    protected $_name = [
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
        'success' => 'success',
        'articleId' => 'article_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->articleId) {
            $res['article_id'] = $this->articleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiMaterialArticleResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['article_id'])){
            $model->articleId = $map['article_id'];
        }
        return $model;
    }
    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

    /**
     * @description 信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 是否成功
     * @var bool
     */
    public $success;

    /**
     * @description 文章id
     * @var int
     */
    public $articleId;

}
