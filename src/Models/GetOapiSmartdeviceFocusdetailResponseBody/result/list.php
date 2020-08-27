<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiSmartdeviceFocusdetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'userName' => 'user_name',
        'deptFullName' => 'dept_full_name',
        'nickName' => 'nick_name',
        'room' => 'room',
        'createDate' => 'create_date',
    ];
    public function validate() {
        Model::validatePattern('createDate', $this->createDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->deptFullName) {
            $res['dept_full_name'] = $this->deptFullName;
        }
        if (null !== $this->nickName) {
            $res['nick_name'] = $this->nickName;
        }
        if (null !== $this->room) {
            $res['room'] = $this->room;
        }
        if (null !== $this->createDate) {
            $res['create_date'] = $this->createDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['dept_full_name'])){
            $model->deptFullName = $map['dept_full_name'];
        }
        if(isset($map['nick_name'])){
            $model->nickName = $map['nick_name'];
        }
        if(isset($map['room'])){
            $model->room = $map['room'];
        }
        if(isset($map['create_date'])){
            $model->createDate = $map['create_date'];
        }
        return $model;
    }
    /**
     * @description 用户名
     * @var string
     */
    public $userName;

    /**
     * @description 部门全称
     * @var string
     */
    public $deptFullName;

    /**
     * @description 投屏设备呢称
     * @var string
     */
    public $nickName;

    /**
     * @description 会议室
     * @var string
     */
    public $room;

    /**
     * @description 投屏时间，单位毫秒
     * @var string
     */
    public $createDate;

}
