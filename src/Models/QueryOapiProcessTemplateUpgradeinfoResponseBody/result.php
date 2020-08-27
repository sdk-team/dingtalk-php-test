<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProcessTemplateUpgradeinfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'canBeUpgraded' => 'can_be_upgraded',
        'processCode' => 'process_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->canBeUpgraded) {
            $res['can_be_upgraded'] = $this->canBeUpgraded;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['can_be_upgraded'])){
            $model->canBeUpgraded = $map['can_be_upgraded'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        return $model;
    }
    /**
     * @description 是否可升级
     * @var bool
     */
    public $canBeUpgraded;

    /**
     * @description 模板code
     * @var string
     */
    public $processCode;

}
