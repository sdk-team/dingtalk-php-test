<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiConferenceParticipantParams extends Model {
    protected $_name = [
        'conferenceId' => 'conference_id',
        'userid' => 'userid',
        'participantUseridList' => 'participant_userid_list',
    ];
    public function validate() {
        Model::validateRequired('conferenceId', $this->conferenceId, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('participantUseridList', $this->participantUseridList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['conference_id'] = $this->conferenceId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->participantUseridList) {
            $res['participant_userid_list'] = $this->participantUseridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiConferenceParticipantParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['conference_id'])){
            $model->conferenceId = $map['conference_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['participant_userid_list'])){
            if(!empty($map['participant_userid_list'])){
                $model->participantUseridList = $map['participant_userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 会务id
     * @var string
     */
    public $conferenceId;

    /**
     * @description 操作用户id
     * @var string
     */
    public $userid;

    /**
     * @description 参会人员列表
     * @var array
     */
    public $participantUseridList;

}
