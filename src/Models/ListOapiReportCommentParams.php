<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiReportCommentParams extends Model {
    protected $_name = [
        'reportId' => 'report_id',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('reportId', $this->reportId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->reportId) {
            $res['report_id'] = $this->reportId;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiReportCommentParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['report_id'])){
            $model->reportId = $map['report_id'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 日志id
     * @var string
     */
    public $reportId;

    /**
     * @description 分页查询的游标，最开始传0，后续传返回参数中的next_cursor值，默认值为0
     * @var int
     */
    public $offset;

    /**
     * @description 分页参数，每页大小，最多传20，默认值为20
     * @var int
     */
    public $size;

}
