<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UnpublishOapiConferenceParams extends Model {
    protected $_name = [
        'conferenceId' => 'conference_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('conferenceId', $this->conferenceId, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['conference_id'] = $this->conferenceId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UnpublishOapiConferenceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['conference_id'])){
            $model->conferenceId = $map['conference_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
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

}
