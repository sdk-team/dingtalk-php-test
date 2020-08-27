<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiFaceauthResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'idcardNo' => 'idcard_no',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->idcardNo) {
            $res['idcard_no'] = $this->idcardNo;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['idcard_no'])){
            $model->idcardNo = $map['idcard_no'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 身份证号码,只有在用户输入的情况下才返回
     * @var string
     */
    public $idcardNo;

    /**
     * @description 用户输入的姓名
     * @var string
     */
    public $name;

}
