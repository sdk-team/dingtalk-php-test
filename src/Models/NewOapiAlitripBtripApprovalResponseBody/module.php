<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\NewOapiAlitripBtripApprovalResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model {
    protected $_name = [
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'applyId' => 'apply_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return module
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['thirdpart_apply_id'])){
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if(isset($map['apply_id'])){
            $model->applyId = $map['apply_id'];
        }
        return $model;
    }
    /**
     * @description 外部申请单id
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @description 商旅申请单id
     * @var int
     */
    public $applyId;

}
