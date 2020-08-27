<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects\manageScope;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects\manageScope\ext\deptInfo;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects\manageScope\ext\staffInfo;

class ext extends Model {
    protected $_name = [
        'deptInfo' => 'dept_info',
        'staffInfo' => 'staff_info',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deptInfo) {
            $res['dept_info'] = [];
            if(null !== $this->deptInfo && is_array($this->deptInfo)){
                $n = 0;
                foreach($this->deptInfo as $item){
                    $res['dept_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->staffInfo) {
            $res['staff_info'] = [];
            if(null !== $this->staffInfo && is_array($this->staffInfo)){
                $n = 0;
                foreach($this->staffInfo as $item){
                    $res['staff_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ext
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['dept_info'])){
            if(!empty($map['dept_info'])){
                $model->deptInfo = [];
                $n = 0;
                foreach($map['dept_info'] as $item) {
                    $model->deptInfo[$n++] = null !== $item ? deptInfo::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['staff_info'])){
            if(!empty($map['staff_info'])){
                $model->staffInfo = [];
                $n = 0;
                foreach($map['staff_info'] as $item) {
                    $model->staffInfo[$n++] = null !== $item ? staffInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 管理部门信息
     * @var array
     */
    public $deptInfo;

    /**
     * @description 员工信息
     * @var array
     */
    public $staffInfo;

}
