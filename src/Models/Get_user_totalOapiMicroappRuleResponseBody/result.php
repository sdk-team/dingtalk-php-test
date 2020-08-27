<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_user_totalOapiMicroappRuleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'userTotal' => 'userTotal',
        'ruleId' => 'ruleId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userTotal) {
            $res['userTotal'] = $this->userTotal;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userTotal'])){
            $model->userTotal = $map['userTotal'];
        }
        if(isset($map['ruleId'])){
            $model->ruleId = $map['ruleId'];
        }
        return $model;
    }
    /**
     * @description userTotal
     * @var int
     */
    public $userTotal;

    /**
     * @description ruleId
     * @var int
     */
    public $ruleId;

}
