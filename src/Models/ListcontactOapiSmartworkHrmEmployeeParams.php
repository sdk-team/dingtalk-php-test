<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListcontactOapiSmartworkHrmEmployeeParams extends Model {
    protected $_name = [
        'useridList' => 'userid_list',
    ];
    public function validate() {
        Model::validateRequired('useridList', $this->useridList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListcontactOapiSmartworkHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 员工id列表
     * @var array
     */
    public $useridList;

}
