<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdatebychatbotidCorpChatbotParams extends Model {
    protected $_name = [
        'icon' => 'icon',
        'name' => 'name',
        'chatbotId' => 'chatbot_id',
        'previewMediaId' => 'preview_media_id',
        'description' => 'description',
        'updateType' => 'update_type',
        'breif' => 'breif',
    ];
    public function validate() {
        Model::validateRequired('updateType', $this->updateType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->chatbotId) {
            $res['chatbot_id'] = $this->chatbotId;
        }
        if (null !== $this->previewMediaId) {
            $res['preview_media_id'] = $this->previewMediaId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->updateType) {
            $res['update_type'] = $this->updateType;
        }
        if (null !== $this->breif) {
            $res['breif'] = $this->breif;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdatebychatbotidCorpChatbotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['chatbot_id'])){
            $model->chatbotId = $map['chatbot_id'];
        }
        if(isset($map['preview_media_id'])){
            $model->previewMediaId = $map['preview_media_id'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['update_type'])){
            $model->updateType = $map['update_type'];
        }
        if(isset($map['breif'])){
            $model->breif = $map['breif'];
        }
        return $model;
    }
    /**
     * @description 机器人头像
     * @var string
     */
    public $icon;

    /**
     * @description 机器人名字
     * @var string
     */
    public $name;

    /**
     * @description 机器人id(钉钉分配)
     * @var string
     */
    public $chatbotId;

    /**
     * @description 机器人预览图
     * @var string
     */
    public $previewMediaId;

    /**
     * @description 机器人详细描述
     * @var string
     */
    public $description;

    /**
     * @description 更新名字或头像时是否更新群里已添加机器人的名字或头像。         * 0-不更新群里机器人名字或头像         * 1-更新群里机器人名字或头像
     * @var int
     */
    public $updateType;

    /**
     * @description 机器人简单描述
     * @var string
     */
    public $breif;

}
