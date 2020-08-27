<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiWorkspaceCorpMemberParams\memberAddDtoList;

class AddOapiWorkspaceCorpMemberParams extends Model {
    protected $_name = [
        'targetCorpId' => 'target_corp_id',
        'memberAddDtoList' => 'member_add_dto_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->targetCorpId) {
            $res['target_corp_id'] = $this->targetCorpId;
        }
        if (null !== $this->memberAddDtoList) {
            $res['member_add_dto_list'] = [];
            if(null !== $this->memberAddDtoList && is_array($this->memberAddDtoList)){
                $n = 0;
                foreach($this->memberAddDtoList as $item){
                    $res['member_add_dto_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiWorkspaceCorpMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['target_corp_id'])){
            $model->targetCorpId = $map['target_corp_id'];
        }
        if(isset($map['member_add_dto_list'])){
            if(!empty($map['member_add_dto_list'])){
                $model->memberAddDtoList = [];
                $n = 0;
                foreach($map['member_add_dto_list'] as $item) {
                    $model->memberAddDtoList[$n++] = null !== $item ? memberAddDtoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 目标加人组织
     * @var string
     */
    public $targetCorpId;

    /**
     * @description 加人的成员列表
     * @var array
     */
    public $memberAddDtoList;

}
