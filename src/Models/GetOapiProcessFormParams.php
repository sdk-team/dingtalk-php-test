<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiProcessFormParams extends Model {
    protected $_name = [
        'processCode' => 'process_code',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiProcessFormParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        return $model;
    }
    /**
     * @description 流程模板code
     * @var string
     */
    public $processCode;

}
