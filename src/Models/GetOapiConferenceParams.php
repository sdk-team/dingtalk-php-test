<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiConferenceParams extends Model {
    protected $_name = [
        'conferenceId' => 'conference_id',
    ];
    public function validate() {
        Model::validateRequired('conferenceId', $this->conferenceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['conference_id'] = $this->conferenceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiConferenceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['conference_id'])){
            $model->conferenceId = $map['conference_id'];
        }
        return $model;
    }
    /**
     * @description 会务Id
     * @var string
     */
    public $conferenceId;

}
