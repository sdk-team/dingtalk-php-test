<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CleanOapiProcessParams extends Model {
    protected $_name = [
        'processCode' => 'process_code',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CleanOapiProcessParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 模板唯一码
     * @var string
     */
    public $processCode;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
