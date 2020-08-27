<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class TransferOapiUserAssociated_unionidParams extends Model {
    protected $_name = [
        'associatedUnionid' => 'associated_unionid',
    ];
    public function validate() {
        Model::validateRequired('associatedUnionid', $this->associatedUnionid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->associatedUnionid) {
            $res['associated_unionid'] = $this->associatedUnionid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TransferOapiUserAssociated_unionidParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['associated_unionid'])){
            $model->associatedUnionid = $map['associated_unionid'];
        }
        return $model;
    }
    /**
     * @description 用户统一ID
     * @var string
     */
    public $associatedUnionid;

}
