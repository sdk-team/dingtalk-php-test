<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\TransferOapiUserAssociated_unionidResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'userid' => 'userid',
        'contactType' => 'contact_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->contactType) {
            $res['contact_type'] = $this->contactType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['contact_type'])){
            $model->contactType = $map['contact_type'];
        }
        return $model;
    }
    /**
     * @description 用户在企业中userid
     * @var string
     */
    public $userid;

    /**
     * @description 用户通讯录类型，0为内部，1为外部
     * @var int
     */
    public $contactType;

}
