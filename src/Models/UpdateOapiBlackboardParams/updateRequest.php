<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiBlackboardParams;

use AlibabaCloud\Tea\Model;

class updateRequest extends Model {
    protected $_name = [
        'author' => 'author',
        'ding' => 'ding',
        'blackboardId' => 'blackboard_id',
        'title' => 'title',
        'content' => 'content',
        'categoryId' => 'category_id',
        'notify' => 'notify',
        'operationUserid' => 'operation_userid',
        'coverpicMediaid' => 'coverpic_mediaid',
    ];
    public function validate() {
        Model::validateRequired('blackboardId', $this->blackboardId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('operationUserid', $this->operationUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->author) {
            $res['author'] = $this->author;
        }
        if (null !== $this->ding) {
            $res['ding'] = $this->ding;
        }
        if (null !== $this->blackboardId) {
            $res['blackboard_id'] = $this->blackboardId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->categoryId) {
            $res['category_id'] = $this->categoryId;
        }
        if (null !== $this->notify) {
            $res['notify'] = $this->notify;
        }
        if (null !== $this->operationUserid) {
            $res['operation_userid'] = $this->operationUserid;
        }
        if (null !== $this->coverpicMediaid) {
            $res['coverpic_mediaid'] = $this->coverpicMediaid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return updateRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['author'])){
            $model->author = $map['author'];
        }
        if(isset($map['ding'])){
            $model->ding = $map['ding'];
        }
        if(isset($map['blackboard_id'])){
            $model->blackboardId = $map['blackboard_id'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['category_id'])){
            $model->categoryId = $map['category_id'];
        }
        if(isset($map['notify'])){
            $model->notify = $map['notify'];
        }
        if(isset($map['operation_userid'])){
            $model->operationUserid = $map['operation_userid'];
        }
        if(isset($map['coverpic_mediaid'])){
            $model->coverpicMediaid = $map['coverpic_mediaid'];
        }
        return $model;
    }
    /**
     * @description 公告作者
     * @var string
     */
    public $author;

    /**
     * @description 是否发送应用内钉提醒
     * @var bool
     */
    public $ding;

    /**
     * @description 公告id
     * @var string
     */
    public $blackboardId;

    /**
     * @description 公告标题
     * @var string
     */
    public $title;

    /**
     * @description 公告内容
     * @var string
     */
    public $content;

    /**
     * @description 公告分类id，可以通过https://oapi.dingtalk.com/blackboard/category/get获取有效值
     * @var string
     */
    public $categoryId;

    /**
     * @description 修改后是否再次通知接收人
     * @var bool
     */
    public $notify;

    /**
     * @description 操作人userId(必须是公告管理员)
     * @var string
     */
    public $operationUserid;

    /**
     * @description 封面图,需要使用mediaId,可以通过https://oapi.dingtalk.com/media/upload上传图片获取mediaId
     * @var string
     */
    public $coverpicMediaid;

}
