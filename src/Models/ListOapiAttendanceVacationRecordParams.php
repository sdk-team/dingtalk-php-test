<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiAttendanceVacationRecordParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'leaveCode' => 'leave_code',
        'userids' => 'userids',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('opUserid', $this->opUserid, true);
        Model::validateRequired('leaveCode', $this->leaveCode, true);
        Model::validateRequired('userids', $this->userids, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMinimum('offset', $this->offset, 0);
        Model::validateMaximum('size', $this->size, 200);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->leaveCode) {
            $res['leave_code'] = $this->leaveCode;
        }
        if (null !== $this->userids) {
            $res['userids'] = $this->userids;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiAttendanceVacationRecordParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['leave_code'])){
            $model->leaveCode = $map['leave_code'];
        }
        if(isset($map['userids'])){
            if(!empty($map['userids'])){
                $model->userids = $map['userids'];
            }
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 操作者ID
     * @var string
     */
    public $opUserid;

    /**
     * @description 假期类型唯一标识
     * @var string
     */
    public $leaveCode;

    /**
     * @description 待查询员工ID列表
     * @var array
     */
    public $userids;

    /**
     * @description 分页偏移(从0开始非负整数)
     * @var int
     */
    public $offset;

    /**
     * @description 分页偏移(正整数 最大50)
     * @var int
     */
    public $size;

}
