<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCrmObjectdataContactParams\instance;

use AlibabaCloud\Tea\Model;

class permission extends Model {
    protected $_name = [
        'participantUserids' => 'participant_userids',
        'ownerUserids' => 'owner_userids',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->participantUserids) {
            $res['participant_userids'] = $this->participantUserids;
        }
        if (null !== $this->ownerUserids) {
            $res['owner_userids'] = $this->ownerUserids;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return permission
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['participant_userids'])){
            if(!empty($map['participant_userids'])){
                $model->participantUserids = $map['participant_userids'];
            }
        }
        if(isset($map['owner_userids'])){
            if(!empty($map['owner_userids'])){
                $model->ownerUserids = $map['owner_userids'];
            }
        }
        return $model;
    }
    /**
     * @description 协同人的用户ID
     * @var array
     */
    public $participantUserids;

    /**
     * @description 负责人的用户ID
     * @var array
     */
    public $ownerUserids;

}
