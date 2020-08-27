<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifyOapiAlitripBtripApprovalResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model {
    protected $_name = [
        'applyId' => 'apply_id',
        'thirdpartApplyId' => 'thirdpart_apply_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return module
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['apply_id'])){
            $model->applyId = $map['apply_id'];
        }
        if(isset($map['thirdpart_apply_id'])){
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        return $model;
    }
    /**
     * @description 商旅申请单id
     * @var int
     */
    public $applyId;

    /**
     * @description 外部申请单id
     * @var string
     */
    public $thirdpartApplyId;

}
