<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncsendOapiEduClassconversationResponseBody\result;

class AsyncsendOapiEduClassconversationResponseBody extends Model {
    protected $_name = [
        'result' => 'result',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AsyncsendOapiEduClassconversationResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['result'])){
            $model->result = result::fromMap($map['result']);
        }
        return $model;
    }
    /**
     * @description result
     * @var result
     */
    public $result;

}
