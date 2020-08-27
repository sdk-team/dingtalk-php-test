<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddprofileOapiImpaasUserResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'imOpenid' => 'im_openid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->imOpenid) {
            $res['im_openid'] = $this->imOpenid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['im_openid'])){
            $model->imOpenid = $map['im_openid'];
        }
        return $model;
    }
    /**
     * @description imOpenId
     * @var string
     */
    public $imOpenid;

}
