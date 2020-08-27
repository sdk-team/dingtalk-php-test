<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiSmartworkHrmMasterParams\bizData;

use AlibabaCloud\Tea\Model;

class scope extends Model {
    protected $_name = [
        'version' => 'version',
        'scopeCode' => 'scope_code',
    ];
    public function validate() {
        Model::validateRequired('scopeCode', $this->scopeCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->scopeCode) {
            $res['scope_code'] = $this->scopeCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return scope
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        if(isset($map['scope_code'])){
            $model->scopeCode = $map['scope_code'];
        }
        return $model;
    }
    /**
     * @description 业务域版本号
     * @var int
     */
    public $version;

    /**
     * @description 业务域code
     * @var string
     */
    public $scopeCode;

}
