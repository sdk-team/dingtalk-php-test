<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiBlackboardParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiBlackboardParams\createRequest\blackboardReceiver;

class createRequest extends Model {
    protected $_name = [
        'operationUserid' => 'operation_userid',
        'author' => 'author',
        'privateLevel' => 'private_level',
        'ding' => 'ding',
        'blackboardReceiver' => 'blackboard_receiver',
        'title' => 'title',
        'pushTop' => 'push_top',
        'content' => 'content',
        'categoryId' => 'category_id',
        'coverpicMediaid' => 'coverpic_mediaid',
    ];
    public function validate() {
        Model::validateRequired('operationUserid', $this->operationUserid, true);
        Model::validateRequired('blackboardReceiver', $this->blackboardReceiver, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('content', $this->content, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->operationUserid) {
            $res['operation_userid'] = $this->operationUserid;
        }
        if (null !== $this->author) {
            $res['author'] = $this->author;
        }
        if (null !== $this->privateLevel) {
            $res['private_level'] = $this->privateLevel;
        }
        if (null !== $this->ding) {
            $res['ding'] = $this->ding;
        }
        if (null !== $this->blackboardReceiver) {
            $res['blackboard_receiver'] = null !== $this->blackboardReceiver ? $this->blackboardReceiver->toMap() : null;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->pushTop) {
            $res['push_top'] = $this->pushTop;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->categoryId) {
            $res['category_id'] = $this->categoryId;
        }
        if (null !== $this->coverpicMediaid) {
            $res['coverpic_mediaid'] = $this->coverpicMediaid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return createRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['operation_userid'])){
            $model->operationUserid = $map['operation_userid'];
        }
        if(isset($map['author'])){
            $model->author = $map['author'];
        }
        if(isset($map['private_level'])){
            $model->privateLevel = $map['private_level'];
        }
        if(isset($map['ding'])){
            $model->ding = $map['ding'];
        }
        if(isset($map['blackboard_receiver'])){
            $model->blackboardReceiver = blackboardReceiver::fromMap($map['blackboard_receiver']);
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['push_top'])){
            $model->pushTop = $map['push_top'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['category_id'])){
            $model->categoryId = $map['category_id'];
        }
        if(isset($map['coverpic_mediaid'])){
            $model->coverpicMediaid = $map['coverpic_mediaid'];
        }
        return $model;
    }
    /**
     * @description 操作人的userId(必须是公告管理员)
     * @var string
     */
    public $operationUserid;

    /**
     * @description 公告作者
     * @var string
     */
    public $author;

    /**
     * @description 保密等级，仅支持以下值(0:普通公告，20：保密公告)
     * @var int
     */
    public $privateLevel;

    /**
     * @description 是否发送应用内钉提醒
     * @var bool
     */
    public $ding;

    /**
     * @description 入参
     * @var blackboardReceiver
     */
    public $blackboardReceiver;

    /**
     * @description 公告标题
     * @var string
     */
    public $title;

    /**
     * @description 公告是否置顶
     * @var bool
     */
    public $pushTop;

    /**
     * @description 公告内容
     * @var string
     */
    public $content;

    /**
     * @description 公告分类id，可以通过公告开放接口：（获取企业公告未删除分类列表）获取有效值
     * @var string
     */
    public $categoryId;

    /**
     * @description 封面图,需要使用mediaId,可以通过钉钉开放接口：https://ding-doc.dingtalk.com/doc#/serverapi2/bcmg0i 上传图片获取mediaId
     * @var string
     */
    public $coverpicMediaid;

}
