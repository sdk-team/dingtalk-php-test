<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddpreentryOapiSmartworkHrmEmployeeParams;

use AlibabaCloud\Tea\Model;

class param extends Model {
    protected $_name = [
        'preEntryTime' => 'pre_entry_time',
        'name' => 'name',
        'extendInfo' => 'extend_info',
        'opUserid' => 'op_userid',
        'mobile' => 'mobile',
    ];
    public function validate() {
        Model::validatePattern('preEntryTime', $this->preEntryTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('mobile', $this->mobile, true);
        Model::validateMaxLength('extendInfo', $this->extendInfo, 1000);
        Model::validateMaxLength('mobile', $this->mobile, 11);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->preEntryTime) {
            $res['pre_entry_time'] = $this->preEntryTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->extendInfo) {
            $res['extend_info'] = $this->extendInfo;
        }
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return param
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['pre_entry_time'])){
            $model->preEntryTime = $map['pre_entry_time'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['extend_info'])){
            $model->extendInfo = $map['extend_info'];
        }
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        return $model;
    }
    /**
     * @description 预期入职时间
     * @var string
     */
    public $preEntryTime;

    /**
     * @description 待入职员工姓名
     * @var string
     */
    public $name;

    /**
     * @description 扩展信息，json串格式，按要求传入有效信息，无效信息不会保存。有效信息有：depts--部门id列表，"|"分隔多个；mainDeptId--主部门id； mainDeptName--主部门名称； position--职位； workPlace--工作地点；employeeType--员工类型枚举值（0，无类型;1，全职;2，兼职;3，实习;4，劳务派遣;5，退休返聘;6，劳务外包）
     * @var string
     */
    public $extendInfo;

    /**
     * @description 操作人userid
     * @var string
     */
    public $opUserid;

    /**
     * @description 待入职员工手机号
     * @var string
     */
    public $mobile;

}
