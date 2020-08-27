<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DelresumerecordOapiHrmEmployeeParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'resumeId' => 'resume_id',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('resumeId', $this->resumeId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->resumeId) {
            $res['resume_id'] = $this->resumeId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DelresumerecordOapiHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['resume_id'])){
            $model->resumeId = $map['resume_id'];
        }
        return $model;
    }
    /**
     * @description 员工userid
     * @var string
     */
    public $userid;

    /**
     * @description 成长记录唯一标识
     * @var string
     */
    public $resumeId;

}
