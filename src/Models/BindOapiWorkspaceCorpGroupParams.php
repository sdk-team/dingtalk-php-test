<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class BindOapiWorkspaceCorpGroupParams extends Model {
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
     * @return BindOapiWorkspaceCorpGroupParams
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
     * @description 目标组织id
     * @var string
     */
    public $targetCorpId;

    /**
     * @description 群列表，只允许运营主体或归属企业的未绑定过的内部群
     * @var array
     */
    public $chatIds;

}
