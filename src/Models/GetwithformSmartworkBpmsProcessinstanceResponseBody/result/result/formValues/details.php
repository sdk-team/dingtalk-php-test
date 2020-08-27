<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetwithformSmartworkBpmsProcessinstanceResponseBody\result\result\formValues;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetwithformSmartworkBpmsProcessinstanceResponseBody\result\result\formValues\details\detailFormValues;

class details extends Model {
    protected $_name = [
        'detailFormValues' => 'detail_form_values',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->detailFormValues) {
            $res['detail_form_values'] = [];
            if(null !== $this->detailFormValues && is_array($this->detailFormValues)){
                $n = 0;
                foreach($this->detailFormValues as $item){
                    $res['detail_form_values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return details
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['detail_form_values'])){
            if(!empty($map['detail_form_values'])){
                $model->detailFormValues = [];
                $n = 0;
                foreach($map['detail_form_values'] as $item) {
                    $model->detailFormValues[$n++] = null !== $item ? detailFormValues::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description details
     * @var array
     */
    public $detailFormValues;

}
