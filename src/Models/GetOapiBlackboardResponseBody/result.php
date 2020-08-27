<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiBlackboardResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'id' => 'id',
        'author' => 'author',
        'title' => 'title',
        'content' => 'content',
        'categoryId' => 'category_id',
        'privateLevel' => 'private_level',
        'depnameList' => 'depname_list',
        'usernameList' => 'username_list',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'readCount' => 'read_count',
        'unreadCount' => 'unread_count',
        'coverpicUrl' => 'coverpic_url',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->author) {
            $res['author'] = $this->author;
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
        if (null !== $this->privateLevel) {
            $res['private_level'] = $this->privateLevel;
        }
        if (null !== $this->depnameList) {
            $res['depname_list'] = $this->depnameList;
        }
        if (null !== $this->usernameList) {
            $res['username_list'] = $this->usernameList;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->readCount) {
            $res['read_count'] = $this->readCount;
        }
        if (null !== $this->unreadCount) {
            $res['unread_count'] = $this->unreadCount;
        }
        if (null !== $this->coverpicUrl) {
            $res['coverpic_url'] = $this->coverpicUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['author'])){
            $model->author = $map['author'];
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
        if(isset($map['private_level'])){
            $model->privateLevel = $map['private_level'];
        }
        if(isset($map['depname_list'])){
            if(!empty($map['depname_list'])){
                $model->depnameList = $map['depname_list'];
            }
        }
        if(isset($map['username_list'])){
            if(!empty($map['username_list'])){
                $model->usernameList = $map['username_list'];
            }
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['read_count'])){
            $model->readCount = $map['read_count'];
        }
        if(isset($map['unread_count'])){
            $model->unreadCount = $map['unread_count'];
        }
        if(isset($map['coverpic_url'])){
            $model->coverpicUrl = $map['coverpic_url'];
        }
        return $model;
    }
    /**
     * @description 公告id
     * @var string
     */
    public $id;

    /**
     * @description 公告作者
     * @var string
     */
    public $author;

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
     * @description 公告分类
     * @var string
     */
    public $categoryId;

    /**
     * @description 保密等级(0：普通公告，20：保密公告)
     * @var int
     */
    public $privateLevel;

    /**
     * @description 接收部门列表
     * @var array
     */
    public $depnameList;

    /**
     * @description 接收人列表
     * @var array
     */
    public $usernameList;

    /**
     * @description 公告创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 公告最后修改时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 已读人数
     * @var int
     */
    public $readCount;

    /**
     * @description 未读人数
     * @var int
     */
    public $unreadCount;

    /**
     * @description 封面图的url链接
     * @var string
     */
    public $coverpicUrl;

}
