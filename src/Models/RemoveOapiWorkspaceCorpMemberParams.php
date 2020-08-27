<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RemoveOapiWorkspaceCorpMemberParams extends Model {
    protected $_name = [
        'targetCorpId' => 'target_corp_id',
        'userids' => 'userids',
    ];
    public function validate() {
        Model::validateRequired('targetCorpId', $this->targetCorpId, true);
        Model::validateRequired('userids', $this->userids, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->targetCorpId) {
            $res['target_corp_id'] = $this->targetCorpId;
        }
        if (null !== $this->userids) {
            $res['userids'] = $this->userids;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RemoveOapiWorkspaceCorpMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['target_corp_id'])){
            $model->targetCorpId = $map['target_corp_id'];
        }
        if(isset($map['userids'])){
            if(!empty($map['userids'])){
                $model->userids = $map['userids'];
            }
        }
        return $model;
    }
    /**
     * @description 目标组织id
     * @var string
     */
    public $targetCorpId;

    /**
     * @description 目标成员
     * @var array
     */
    public $userids;

}
