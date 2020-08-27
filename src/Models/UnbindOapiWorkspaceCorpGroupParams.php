<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UnbindOapiWorkspaceCorpGroupParams extends Model {
    protected $_name = [
        'targetCorpId' => 'target_corp_id',
        'chatIds' => 'chat_ids',
    ];
    public function validate() {
        Model::validateRequired('targetCorpId', $this->targetCorpId, true);
        Model::validateRequired('chatIds', $this->chatIds, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->targetCorpId) {
            $res['target_corp_id'] = $this->targetCorpId;
        }
        if (null !== $this->chatIds) {
            $res['chat_ids'] = $this->chatIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UnbindOapiWorkspaceCorpGroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['target_corp_id'])){
            $model->targetCorpId = $map['target_corp_id'];
        }
        if(isset($map['chat_ids'])){
            if(!empty($map['chat_ids'])){
                $model->chatIds = $map['chat_ids'];
            }
        }
        return $model;
    }
    /**
     * @description 目标组织
     * @var string
     */
    public $targetCorpId;

    /**
     * @description 要解绑的群，必须是当前组织的内部群
     * @var array
     */
    public $chatIds;

}
