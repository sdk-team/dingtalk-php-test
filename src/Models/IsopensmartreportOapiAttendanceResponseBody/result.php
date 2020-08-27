<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\IsopensmartreportOapiAttendanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'smartReport' => 'smart_report',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->smartReport) {
            $res['smart_report'] = $this->smartReport;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['smart_report'])){
            $model->smartReport = $map['smart_report'];
        }
        return $model;
    }
    /**
     * @description 判断企业是否开启了考勤智能报表，true表示开启
     * @var bool
     */
    public $smartReport;

}
