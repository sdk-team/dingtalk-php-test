<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendforpayslipOapiSmartworkHrmSmsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'successUseridList' => 'success_userid_list',
        'invalidUseridList' => 'invalid_userid_list',
        'failedUseridList' => 'failed_userid_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->successUseridList) {
            $res['success_userid_list'] = $this->successUseridList;
        }
        if (null !== $this->invalidUseridList) {
            $res['invalid_userid_list'] = $this->invalidUseridList;
        }
        if (null !== $this->failedUseridList) {
            $res['failed_userid_list'] = $this->failedUseridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['success_userid_list'])){
            if(!empty($map['success_userid_list'])){
                $model->successUseridList = $map['success_userid_list'];
            }
        }
        if(isset($map['invalid_userid_list'])){
            if(!empty($map['invalid_userid_list'])){
                $model->invalidUseridList = $map['invalid_userid_list'];
            }
        }
        if(isset($map['failed_userid_list'])){
            if(!empty($map['failed_userid_list'])){
                $model->failedUseridList = $map['failed_userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 成功的userids
     * @var array
     */
    public $successUseridList;

    /**
     * @description 无效的userids
     * @var array
     */
    public $invalidUseridList;

    /**
     * @description 失败的userids
     * @var array
     */
    public $failedUseridList;

}
