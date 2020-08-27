<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class BatchdeleteOapiUserParams extends Model {
    protected $_name = [
        'useridlist' => 'useridlist',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->useridlist) {
            $res['useridlist'] = $this->useridlist;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BatchdeleteOapiUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['useridlist'])){
            if(!empty($map['useridlist'])){
                $model->useridlist = $map['useridlist'];
            }
        }
        return $model;
    }
    /**
     * @description 员工UserID列表。列表长度在1到20之间
     * @var array
     */
    public $useridlist;

}
