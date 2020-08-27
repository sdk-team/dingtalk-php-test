<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetprofileOapiImpaasUserParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetprofileOapiImpaasUserParams\request\accountInfo;

class request extends Model {
    protected $_name = [
        'accountInfo' => 'accountInfo',
    ];
    public function validate() {
        Model::validateRequired('accountInfo', $this->accountInfo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->accountInfo) {
            $res['accountInfo'] = null !== $this->accountInfo ? $this->accountInfo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['accountInfo'])){
            $model->accountInfo = accountInfo::fromMap($map['accountInfo']);
        }
        return $model;
    }
    /**
     * @description 用户信息
     * @var accountInfo
     */
    public $accountInfo;

}
