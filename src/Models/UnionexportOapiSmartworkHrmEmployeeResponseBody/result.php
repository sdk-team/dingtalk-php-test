<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UnionexportOapiSmartworkHrmEmployeeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'exportId' => 'export_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->exportId) {
            $res['export_id'] = $this->exportId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['export_id'])){
            $model->exportId = $map['export_id'];
        }
        return $model;
    }
    /**
     * @description 导出记录id
     * @var string
     */
    public $exportId;

}
