<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncsendOapiEduClassconversationParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'classId' => 'class_id',
        'attributes' => 'attributes',
        'templateId' => 'template_id',
        'receiverUserIds' => 'receiver_user_ids',
        'nonce' => 'nonce',
    ];
    public function validate() {
        Model::validateRequired('classId', $this->classId, true);
        Model::validateRequired('attributes', $this->attributes, true);
        Model::validateRequired('templateId', $this->templateId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }
        if (null !== $this->receiverUserIds) {
            $res['receiver_user_ids'] = $this->receiverUserIds;
        }
        if (null !== $this->nonce) {
            $res['nonce'] = $this->nonce;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['attributes'])){
            $model->attributes = $map['attributes'];
        }
        if(isset($map['template_id'])){
            $model->templateId = $map['template_id'];
        }
        if(isset($map['receiver_user_ids'])){
            if(!empty($map['receiver_user_ids'])){
                $model->receiverUserIds = $map['receiver_user_ids'];
            }
        }
        if(isset($map['nonce'])){
            $model->nonce = $map['nonce'];
        }
        return $model;
    }
    /**
     * @description 班级id
     * @var int
     */
    public $classId;

    /**
     * @description 占位符替换词
     * @var string
     */
    public $attributes;

    /**
     * @description 模板id
     * @var int
     */
    public $templateId;

    /**
     * @description 接收者userid
     * @var array
     */
    public $receiverUserIds;

    /**
     * @description 随机数，在小程序打开的时候传入。需要透传过来
     * @var string
     */
    public $nonce;

}
