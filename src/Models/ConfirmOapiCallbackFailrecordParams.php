<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ConfirmOapiCallbackFailrecordParams extends Model {
    protected $_name = [
        'idList' => 'id_list',
    ];
    public function validate() {
        Model::validateRequired('idList', $this->idList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->idList) {
            $res['id_list'] = $this->idList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ConfirmOapiCallbackFailrecordParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id_list'])){
            if(!empty($map['id_list'])){
                $model->idList = $map['id_list'];
            }
        }
        return $model;
    }
    /**
     * @description 失败记录id列表
     * @var array
     */
    public $idList;

}
