<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifymemberinfoOapiImpaasGroupmemberParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModifymemberinfoOapiImpaasGroupmemberParams\request\memberInfo;

class request extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'memberInfo' => 'member_info',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('memberInfo', $this->memberInfo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->memberInfo) {
            $res['member_info'] = null !== $this->memberInfo ? $this->memberInfo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['member_info'])){
            $model->memberInfo = memberInfo::fromMap($map['member_info']);
        }
        return $model;
    }
    /**
     * @description 群ID
     * @var string
     */
    public $chatid;

    /**
     * @description 要修改的成员信息
     * @var memberInfo
     */
    public $memberInfo;

}
