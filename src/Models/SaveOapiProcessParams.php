<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiProcessParams\saveProcessRequest;

class SaveOapiProcessParams extends Model {
    protected $_name = [
        'saveProcessRequest' => 'saveProcessRequest',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->saveProcessRequest) {
            $res['saveProcessRequest'] = null !== $this->saveProcessRequest ? $this->saveProcessRequest->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SaveOapiProcessParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['saveProcessRequest'])){
            $model->saveProcessRequest = saveProcessRequest::fromMap($map['saveProcessRequest']);
        }
        return $model;
    }
    /**
     * @description 入参
     * @var saveProcessRequest
     */
    public $saveProcessRequest;

}
