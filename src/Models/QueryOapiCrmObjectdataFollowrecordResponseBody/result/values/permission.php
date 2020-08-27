<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCrmObjectdataFollowrecordResponseBody\result\values;

use AlibabaCloud\Tea\Model;

class permission extends Model {
    protected $_name = [
        'ownerUseridList' => 'owner_userid_list',
        'participantUseridList' => 'participant_userid_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->ownerUseridList) {
            $res['owner_userid_list'] = $this->ownerUseridList;
        }
        if (null !== $this->participantUseridList) {
            $res['participant_userid_list'] = $this->participantUseridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return permission
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['owner_userid_list'])){
            if(!empty($map['owner_userid_list'])){
                $model->ownerUseridList = $map['owner_userid_list'];
            }
        }
        if(isset($map['participant_userid_list'])){
            if(!empty($map['participant_userid_list'])){
                $model->participantUseridList = $map['participant_userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 负责人用户ID列表
     * @var array
     */
    public $ownerUseridList;

    /**
     * @description 协同人用户ID列表
     * @var array
     */
    public $participantUseridList;

}
