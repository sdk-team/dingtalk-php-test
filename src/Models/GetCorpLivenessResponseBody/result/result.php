<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetCorpLivenessResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'liveness' => 'liveness',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->liveness) {
            $res['liveness'] = $this->liveness;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['liveness'])){
            $model->liveness = $map['liveness'];
        }
        return $model;
    }
    /**
     * @description 活跃度，L1：不活跃，L2：低活跃，L3：中活跃，L4：高活跃，L5：超活跃
     * @var string
     */
    public $liveness;

}
