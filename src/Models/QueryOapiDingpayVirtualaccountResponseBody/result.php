<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiDingpayVirtualaccountResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiDingpayVirtualaccountResponseBody\result\accountOpenBo;

class result extends Model {
    protected $_name = [
        'accountOpenBo' => 'account_open_bo',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->accountOpenBo) {
            $res['account_open_bo'] = null !== $this->accountOpenBo ? $this->accountOpenBo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['account_open_bo'])){
            $model->accountOpenBo = accountOpenBo::fromMap($map['account_open_bo']);
        }
        return $model;
    }
    /**
     * @description accountOpenBO
     * @var accountOpenBo
     */
    public $accountOpenBo;

}
