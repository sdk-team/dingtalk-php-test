<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpDingTaskResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'dingId' => 'ding_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dingId) {
            $res['ding_id'] = $this->dingId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ding_id'])){
            $model->dingId = $map['ding_id'];
        }
        return $model;
    }
    /**
     * @description dingId
     * @var string
     */
    public $dingId;

}
