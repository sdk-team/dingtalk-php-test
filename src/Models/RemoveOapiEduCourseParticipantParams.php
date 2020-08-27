<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RemoveOapiEduCourseParticipantParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'participantCorpid' => 'participant_corpid',
        'courseCode' => 'course_code',
        'participantId' => 'participant_id',
        'role' => 'role',
        'participantType' => 'participant_type',
    ];
    public function validate() {
        Model::validateRequired('opUserid', $this->opUserid, true);
        Model::validateRequired('participantCorpid', $this->participantCorpid, true);
        Model::validateRequired('courseCode', $this->courseCode, true);
        Model::validateRequired('participantId', $this->participantId, true);
        Model::validateRequired('role', $this->role, true);
        Model::validateRequired('participantType', $this->participantType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->participantCorpid) {
            $res['participant_corpid'] = $this->participantCorpid;
        }
        if (null !== $this->courseCode) {
            $res['course_code'] = $this->courseCode;
        }
        if (null !== $this->participantId) {
            $res['participant_id'] = $this->participantId;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->participantType) {
            $res['participant_type'] = $this->participantType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RemoveOapiEduCourseParticipantParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['participant_corpid'])){
            $model->participantCorpid = $map['participant_corpid'];
        }
        if(isset($map['course_code'])){
            $model->courseCode = $map['course_code'];
        }
        if(isset($map['participant_id'])){
            $model->participantId = $map['participant_id'];
        }
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        if(isset($map['participant_type'])){
            $model->participantType = $map['participant_type'];
        }
        return $model;
    }
    /**
     * @description 当前用户ID
     * @var string
     */
    public $opUserid;

    /**
     * @description 参与方的组织CropId
     * @var string
     */
    public $participantCorpid;

    /**
     * @description 课程编码
     * @var string
     */
    public $courseCode;

    /**
     * @description 参与方ID。participant_type=1时，participant_id表示用户ID；participant_type=2时，participant_id表示部门ID；participant_type=3时，participant_id表示组织ID；
     * @var string
     */
    public $participantId;

    /**
     * @description student：学生、guardian: 监护人、teacher：老师（注意：授课老师不支持移除）
     * @var string
     */
    public $role;

    /**
     * @description 1：用户、2：部门（对应家校通讯录中的班级、年级。详情请参考https://ding-doc.dingtalk.com/doc#/serverapi3/gga05a/z3y0h）、3：组织
     * @var int
     */
    public $participantType;

}
