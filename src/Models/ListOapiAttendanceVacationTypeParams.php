<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiAttendanceVacationTypeParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'vacationSource' => 'vacation_source',
    ];
    public function validate() {
        Model::validateRequired('opUserid', $this->opUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->vacationSource) {
            $res['vacation_source'] = $this->vacationSource;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiAttendanceVacationTypeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['vacation_source'])){
            $model->vacationSource = $map['vacation_source'];
        }
        return $model;
    }
    /**
     * @description 操作员ID
     * @var string
     */
    public $opUserid;

    /**
     * @description 空:开放接口定义假期类型;all:所有假期类型
     * @var string
     */
    public $vacationSource;

}
