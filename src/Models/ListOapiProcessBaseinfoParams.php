<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiProcessBaseinfoParams extends Model {
    protected $_name = [
        'processCodes' => 'process_codes',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->processCodes) {
            $res['process_codes'] = $this->processCodes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiProcessBaseinfoParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_codes'])){
            if(!empty($map['process_codes'])){
                $model->processCodes = $map['process_codes'];
            }
        }
        return $model;
    }
    /**
     * @description 模板code列表
     * @var array
     */
    public $processCodes;

}
