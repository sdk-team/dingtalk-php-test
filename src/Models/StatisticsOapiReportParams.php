<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class StatisticsOapiReportParams extends Model {
    protected $_name = [
        'reportId' => 'report_id',
    ];
    public function validate() {
        Model::validateRequired('reportId', $this->reportId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->reportId) {
            $res['report_id'] = $this->reportId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return StatisticsOapiReportParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['report_id'])){
            $model->reportId = $map['report_id'];
        }
        return $model;
    }
    /**
     * @description 日志id
     * @var string
     */
    public $reportId;

}
