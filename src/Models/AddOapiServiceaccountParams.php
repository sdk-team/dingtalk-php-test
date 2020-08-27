<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddOapiServiceaccountParams extends Model {
    protected $_name = [
        'name' => 'name',
        'avatarMediaId' => 'avatar_media_id',
        'brief' => 'brief',
        'desc' => 'desc',
        'previewMediaId' => 'preview_media_id',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('avatarMediaId', $this->avatarMediaId, true);
        Model::validateRequired('desc', $this->desc, true);
        Model::validateRequired('previewMediaId', $this->previewMediaId, true);
        Model::validateMaxLength('name', $this->name, 30);
        Model::validateMaxLength('brief', $this->brief, 60);
        Model::validateMaxLength('desc', $this->desc, 200);
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
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiServiceaccountParams
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
     * @description 机器人管理列表中的简介
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

}
