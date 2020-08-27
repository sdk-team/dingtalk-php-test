<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCrmGroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'cid' => 'cid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cid'])){
            $model->cid = $map['cid'];
        }
        return $model;
    }
    /**
     * @description 加密的群cid
     * @var string
     */
    public $cid;

}
