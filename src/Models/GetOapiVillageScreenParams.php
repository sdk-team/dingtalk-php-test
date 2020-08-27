<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiVillageScreenParams\req;

class GetOapiVillageScreenParams extends Model {
    protected $_name = [
        'req' => 'req',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->req) {
            $res['req'] = null !== $this->req ? $this->req->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiVillageScreenParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['req'])){
            $model->req = req::fromMap($map['req']);
        }
        return $model;
    }
    /**
     * @description -
     * @var req
     */
    public $req;

}
