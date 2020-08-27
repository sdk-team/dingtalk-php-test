<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateCorpDingResponseBody\result;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'openDingId' => 'open_ding_id',
        'invalidUsers' => 'invalid_users',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->openDingId) {
            $res['open_ding_id'] = $this->openDingId;
        }
        if (null !== $this->invalidUsers) {
            $res['invalid_users'] = $this->invalidUsers;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_ding_id'])){
            $model->openDingId = $map['open_ding_id'];
        }
        if(isset($map['invalid_users'])){
            if(!empty($map['invalid_users'])){
                $model->invalidUsers = $map['invalid_users'];
            }
        }
        return $model;
    }
    /**
     * @description openDingId
     * @var string
     */
    public $openDingId;

    /**
     * @description invalidUser
     * @var array
     */
    public $invalidUsers;

}
