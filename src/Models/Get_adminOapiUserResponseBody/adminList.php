<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_adminOapiUserResponseBody;

use AlibabaCloud\Tea\Model;

class adminList extends Model {
    protected $_name = [
        'sysLevel' => 'sys_level',
        'userid' => 'userid',
        'adminMobile' => 'admin_mobile',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sysLevel) {
            $res['sys_level'] = $this->sysLevel;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->adminMobile) {
            $res['admin_mobile'] = $this->adminMobile;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return adminList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sys_level'])){
            $model->sysLevel = $map['sys_level'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['admin_mobile'])){
            $model->adminMobile = $map['admin_mobile'];
        }
        return $model;
    }
    /**
     * @description sys_level
     * @var int
     */
    public $sysLevel;

    /**
     * @description userid
     * @var string
     */
    public $userid;

    /**
     * @description admin_mobile
     * @var string
     */
    public $adminMobile;

}
