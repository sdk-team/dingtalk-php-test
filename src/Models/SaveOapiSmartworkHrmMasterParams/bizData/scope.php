<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SaveOapiSmartworkHrmMasterParams\bizData;

use AlibabaCloud\Tea\Model;

class scope extends Model {
    protected $_name = [
        'scopeCode' => 'scope_code',
        'version' => 'version',
    ];
    public function validate() {
        Model::validateRequired('scopeCode', $this->scopeCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->scopeCode) {
            $res['scope_code'] = $this->scopeCode;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return scope
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['scope_code'])){
            $model->scopeCode = $map['scope_code'];
        }
        if(isset($map['version'])){
            $model->version = $map['version'];
        }
        return $model;
    }
    /**
     * @description 业务域code，如PERFORMANCE，系统分配，枚举见文档
     * @var string
     */
    public $scopeCode;

    /**
     * @description 业务域版本，接入时系统分配，默认传0
     * @var int
     */
    public $version;

}
