<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiInspectFeedbackResponseBody\feedbackForm;

use AlibabaCloud\Tea\Model;

class content extends Model {
    protected $_name = [
        'label' => 'label',
        'value' => 'value',
        'type' => 'type',
        'id' => 'id',
        'bizAlias' => 'biz_alias',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->bizAlias) {
            $res['biz_alias'] = $this->bizAlias;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return content
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['biz_alias'])){
            $model->bizAlias = $map['biz_alias'];
        }
        return $model;
    }
    /**
     * @description 表单项标题
     * @var string
     */
    public $label;

    /**
     * @description 表单项的值
     * @var string
     */
    public $value;

    /**
     * @description 表单项的类型
     * @var string
     */
    public $type;

    /**
     * @description 表单项的唯一标识
     * @var string
     */
    public $id;

    /**
     * @description 表单项的业务别名
     * @var string
     */
    public $bizAlias;

}
