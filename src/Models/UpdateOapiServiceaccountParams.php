<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiServiceaccountParams extends Model {
    protected $_name = [
        'name' => 'name',
        'avatarMediaId' => 'avatar_media_id',
        'brief' => 'brief',
        'desc' => 'desc',
        'previewMediaId' => 'preview_media_id',
        'unionid' => 'unionid',
        'status' => 'status',
    ];
    public function validate() {
        Model::validateMaxLength('name', $this->name, 30);
        Model::validateMaxLength('brief', $this->brief, 60);
        Model::validateMaxLength('desc', $this->desc, 200);
        Model::validateRequired('unionid', $this->unionid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->avatarMediaId) {
            $res['avatar_media_id'] = $this->avatarMediaId;
        }
        if (null !== $this->brief) {
            $res['brief'] = $this->brief;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->previewMediaId) {
            $res['preview_media_id'] = $this->previewMediaId;
        }
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiServiceaccountParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['avatar_media_id'])){
            $model->avatarMediaId = $map['avatar_media_id'];
        }
        if(isset($map['brief'])){
            $model->brief = $map['brief'];
        }
        if(isset($map['desc'])){
            $model->desc = $map['desc'];
        }
        if(isset($map['preview_media_id'])){
            $model->previewMediaId = $map['preview_media_id'];
        }
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 服务号名称
     * @var string
     */
    public $name;

    /**
     * @description 头像图片mediaId
     * @var string
     */
    public $avatarMediaId;

    /**
     * @description 机器人管理列表中的简介，最多60个字符
     * @var string
     */
    public $brief;

    /**
     * @description 机器人主页中的服务号功能简介，最多200个字符
     * @var string
     */
    public $desc;

    /**
     * @description 机器人主页中，消息预览图片的mediaId
     * @var string
     */
    public $previewMediaId;

    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

    /**
     * @description normal-正常，disabled-删除
     * @var string
     */
    public $status;

}
