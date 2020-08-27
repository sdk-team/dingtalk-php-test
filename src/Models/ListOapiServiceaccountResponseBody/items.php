<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiServiceaccountResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model {
    protected $_name = [
        'desc' => 'desc',
        'previewMediaId' => 'preview_media_id',
        'brief' => 'brief',
        'avatarMediaId' => 'avatar_media_id',
        'name' => 'name',
        'status' => 'status',
        'unionid' => 'unionid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->previewMediaId) {
            $res['preview_media_id'] = $this->previewMediaId;
        }
        if (null !== $this->brief) {
            $res['brief'] = $this->brief;
        }
        if (null !== $this->avatarMediaId) {
            $res['avatar_media_id'] = $this->avatarMediaId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['desc'])){
            $model->desc = $map['desc'];
        }
        if(isset($map['preview_media_id'])){
            $model->previewMediaId = $map['preview_media_id'];
        }
        if(isset($map['brief'])){
            $model->brief = $map['brief'];
        }
        if(isset($map['avatar_media_id'])){
            $model->avatarMediaId = $map['avatar_media_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        return $model;
    }
    /**
     * @description 机器人主页中的服务号功能简介
     * @var string
     */
    public $desc;

    /**
     * @description 机器人主页中，消息预览图片的mediaId
     * @var string
     */
    public $previewMediaId;

    /**
     * @description 机器人管理列表中的简介
     * @var string
     */
    public $brief;

    /**
     * @description 头像图片mediaId
     * @var string
     */
    public $avatarMediaId;

    /**
     * @description 服务号名称
     * @var string
     */
    public $name;

    /**
     * @description 状态，normal-正常，disabled-停用
     * @var string
     */
    public $status;

    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

}
