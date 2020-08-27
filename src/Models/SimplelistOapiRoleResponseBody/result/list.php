<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SimplelistOapiRoleResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SimplelistOapiRoleResponseBody\result\list_\manageScopes;

class list_ extends Model {
    protected $_name = [
        'userid' => 'userid',
        'name' => 'name',
        'manageScopes' => 'manageScopes',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->manageScopes) {
            $res['manageScopes'] = [];
            if(null !== $this->manageScopes && is_array($this->manageScopes)){
                $n = 0;
                foreach($this->manageScopes as $item){
                    $res['manageScopes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['manageScopes'])){
            if(!empty($map['manageScopes'])){
                $model->manageScopes = [];
                $n = 0;
                foreach($map['manageScopes'] as $item) {
                    $model->manageScopes[$n++] = null !== $item ? manageScopes::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 员工姓名
     * @var string
     */
    public $name;

    /**
     * @description 管理范围
     * @var array
     */
    public $manageScopes;

}
