<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetuseridsOapiWorkspaceCorpMemberParams extends Model {
    protected $_name = [
        'sourceCorpId' => 'source_corp_id',
        'userids' => 'userids',
    ];
    public function validate() {
        Model::validateRequired('sourceCorpId', $this->sourceCorpId, true);
        Model::validateRequired('userids', $this->userids, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sourceCorpId) {
            $res['source_corp_id'] = $this->sourceCorpId;
        }
        if (null !== $this->userids) {
            $res['userids'] = $this->userids;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetuseridsOapiWorkspaceCorpMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['source_corp_id'])){
            $model->sourceCorpId = $map['source_corp_id'];
        }
        if(isset($map['userids'])){
            if(!empty($map['userids'])){
                $model->userids = $map['userids'];
            }
        }
        return $model;
    }
    /**
     * @description 小圈corpId
     * @var string
     */
    public $sourceCorpId;

    /**
     * @description 小圈的userid列表
     * @var array
     */
    public $userids;

}
