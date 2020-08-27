<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SyncOapiConferenceParticipantParams extends Model {
    protected $_name = [
        'conferenceId' => 'conference_id',
        'userid' => 'userid',
        'batchId' => 'batch_id',
        'batchIndex' => 'batch_index',
        'isFinished' => 'is_finished',
        'participantUseridList' => 'participant_userid_list',
    ];
    public function validate() {
        Model::validateRequired('conferenceId', $this->conferenceId, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('batchIndex', $this->batchIndex, true);
        Model::validateRequired('isFinished', $this->isFinished, true);
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
        if (null !== $this->batchId) {
            $res['batch_id'] = $this->batchId;
        }
        if (null !== $this->batchIndex) {
            $res['batch_index'] = $this->batchIndex;
        }
        if (null !== $this->isFinished) {
            $res['is_finished'] = $this->isFinished;
        }
        if (null !== $this->participantUseridList) {
            $res['participant_userid_list'] = $this->participantUseridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SyncOapiConferenceParticipantParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['conference_id'])){
            $model->conferenceId = $map['conference_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['batch_id'])){
            $model->batchId = $map['batch_id'];
        }
        if(isset($map['batch_index'])){
            $model->batchIndex = $map['batch_index'];
        }
        if(isset($map['is_finished'])){
            $model->isFinished = $map['is_finished'];
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
     * @description 全量同步id，第一批上传时为空，后续批次需要带上
     * @var string
     */
    public $batchId;

    /**
     * @description 标识批次，从1递增
     * @var int
     */
    public $batchIndex;

    /**
     * @description 是否最后一批
     * @var bool
     */
    public $isFinished;

    /**
     * @description 参会人员id列表
     * @var array
     */
    public $participantUseridList;

}
