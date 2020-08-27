<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetwithformSmartworkBpmsProcessinstanceResponseBody\result\result\formValues\details;

use AlibabaCloud\Tea\Model;

class detailFormValues extends Model {
    protected $_name = [
        'detailFormId' => 'detail_form_id',
        'detailFormBizAlias' => 'detail_form_biz_alias',
        'detailFormName' => 'detail_form_name',
        'detailFormValue' => 'detail_form_value',
        'detailFormExtValue' => 'detail_form_ext_value',
        'detailComponentType' => 'detail_component_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->detailFormId) {
            $res['detail_form_id'] = $this->detailFormId;
        }
        if (null !== $this->detailFormBizAlias) {
            $res['detail_form_biz_alias'] = $this->detailFormBizAlias;
        }
        if (null !== $this->detailFormName) {
            $res['detail_form_name'] = $this->detailFormName;
        }
        if (null !== $this->detailFormValue) {
            $res['detail_form_value'] = $this->detailFormValue;
        }
        if (null !== $this->detailFormExtValue) {
            $res['detail_form_ext_value'] = $this->detailFormExtValue;
        }
        if (null !== $this->detailComponentType) {
            $res['detail_component_type'] = $this->detailComponentType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return detailFormValues
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['detail_form_id'])){
            $model->detailFormId = $map['detail_form_id'];
        }
        if(isset($map['detail_form_biz_alias'])){
            $model->detailFormBizAlias = $map['detail_form_biz_alias'];
        }
        if(isset($map['detail_form_name'])){
            $model->detailFormName = $map['detail_form_name'];
        }
        if(isset($map['detail_form_value'])){
            $model->detailFormValue = $map['detail_form_value'];
        }
        if(isset($map['detail_form_ext_value'])){
            $model->detailFormExtValue = $map['detail_form_ext_value'];
        }
        if(isset($map['detail_component_type'])){
            $model->detailComponentType = $map['detail_component_type'];
        }
        return $model;
    }
    /**
     * @description 明细表单控件id
     * @var string
     */
    public $detailFormId;

    /**
     * @description 明细表单别名
     * @var string
     */
    public $detailFormBizAlias;

    /**
     * @description 明细表单名称
     * @var string
     */
    public $detailFormName;

    /**
     * @description 明细表单值
     * @var string
     */
    public $detailFormValue;

    /**
     * @description 明细扩展值
     * @var string
     */
    public $detailFormExtValue;

    /**
     * @description 组件类型
     * @var string
     */
    public $detailComponentType;

}
