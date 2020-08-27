<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiServiceaccountMenuParams extends Model {
    protected $_name = [
        'unionid' => 'unionid',
    ];
    public function validate() {
        Model::validateRequired('unionid', $this->unionid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->unionid) {
            $res['unionid'] = $this->unionid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiServiceaccountMenuParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['unionid'])){
            $model->unionid = $map['unionid'];
        }
        return $model;
    }
    /**
     * @description 服务号的unionid
     * @var string
     */
    public $unionid;

}
