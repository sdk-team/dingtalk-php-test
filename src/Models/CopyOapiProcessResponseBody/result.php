<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CopyOapiProcessResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'processCode' => 'process_code',
        'description' => 'description',
        'name' => 'name',
        'bizCategoryId' => 'biz_category_id',
        'formContent' => 'form_content',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->bizCategoryId) {
            $res['biz_category_id'] = $this->bizCategoryId;
        }
        if (null !== $this->formContent) {
            $res['form_content'] = $this->formContent;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['biz_category_id'])){
            $model->bizCategoryId = $map['biz_category_id'];
        }
        if(isset($map['form_content'])){
            $model->formContent = $map['form_content'];
        }
        return $model;
    }
    /**
     * @description processCode
     * @var string
     */
    public $processCode;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description bizCategoryId
     * @var string
     */
    public $bizCategoryId;

    /**
     * @description formContent
     * @var string
     */
    public $formContent;

}
