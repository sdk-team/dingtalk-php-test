<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkspaceCorpMemberParams;

use AlibabaCloud\Tea\Model;

class memberAddDtoList extends Model {
    protected $_name = [
        'fromCorpId' => 'from_corp_id',
        'fromUserid' => 'from_userid',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fromCorpId) {
            $res['from_corp_id'] = $this->fromCorpId;
        }
        if (null !== $this->fromUserid) {
            $res['from_userid'] = $this->fromUserid;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return memberAddDtoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['from_corp_id'])){
            $model->fromCorpId = $map['from_corp_id'];
        }
        if(isset($map['from_userid'])){
            $model->fromUserid = $map['from_userid'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 成员来源组织
     * @var string
     */
    public $fromCorpId;

    /**
     * @description 来源组织成员userId
     * @var string
     */
    public $fromUserid;

    /**
     * @description 目标组织userId
     * @var string
     */
    public $userid;

}
