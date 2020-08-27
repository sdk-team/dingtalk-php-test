<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkspaceProjectMemberParams;

use AlibabaCloud\Tea\Model;

class members extends Model {
    protected $_name = [
        'userid' => 'userid',
        'fromCorpId' => 'from_corp_id',
        'fromUserid' => 'from_userid',
    ];
    public function validate() {
        Model::validateRequired('fromCorpId', $this->fromCorpId, true);
        Model::validateRequired('fromUserid', $this->fromUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->fromCorpId) {
            $res['from_corp_id'] = $this->fromCorpId;
        }
        if (null !== $this->fromUserid) {
            $res['from_userid'] = $this->fromUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return members
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['from_corp_id'])){
            $model->fromCorpId = $map['from_corp_id'];
        }
        if(isset($map['from_userid'])){
            $model->fromUserid = $map['from_userid'];
        }
        return $model;
    }
    /**
     * @description 添加到新组织后，允许指定1个userId，但是有可能由于该userId与已新组织内已存在的员工userId重复报错。非必填。长度4-32位之间，仅允许（字母 数字 _ -）
     * @var string
     */
    public $userid;

    /**
     * @description 从哪个组织选人
     * @var string
     */
    public $fromCorpId;

    /**
     * @description 配合fromCorpId，在那个组织内的userid
     * @var string
     */
    public $fromUserid;

}
