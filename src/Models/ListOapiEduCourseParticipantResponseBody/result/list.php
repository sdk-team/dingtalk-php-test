<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEduCourseParticipantResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'role' => 'role',
        'participantId' => 'participant_id',
        'participantType' => 'participant_type',
        'participantCorpid' => 'participant_corpid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->participantId) {
            $res['participant_id'] = $this->participantId;
        }
        if (null !== $this->participantType) {
            $res['participant_type'] = $this->participantType;
        }
        if (null !== $this->participantCorpid) {
            $res['participant_corpid'] = $this->participantCorpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        if(isset($map['participant_id'])){
            $model->participantId = $map['participant_id'];
        }
        if(isset($map['participant_type'])){
            $model->participantType = $map['participant_type'];
        }
        if(isset($map['participant_corpid'])){
            $model->participantCorpid = $map['participant_corpid'];
        }
        return $model;
    }
    /**
     * @description 参与方角色。student：学生、teacher：老师、guardian: 监护人
     * @var string
     */
    public $role;

    /**
     * @description 参与方ID。participant_type=1时，participant_id表示用户ID；participant_type=2时，participant_id表示部门ID；participant_type=3时，participant_id表示组织ID；
     * @var string
     */
    public $participantId;

    /**
     * @description 参与方类型。1：用户、2：部门（对应家校通讯录中的班级、年级。详情请参考https://ding-doc.dingtalk.com/doc#/serverapi3/gga05a/z3y0h）、3：组织
     * @var string
     */
    public $participantType;

    /**
     * @description 参与方的组织CorpId
     * @var string
     */
    public $participantCorpid;

}
