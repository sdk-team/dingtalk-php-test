<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyconversationidOapiRobotMessageStatisticsResponseBody\result;

use AlibabaCloud\Tea\Model;

class pagination extends Model {
    protected $_name = [
        'totalRecordNum' => 'total_record_num',
        'totalPage' => 'total_page',
        'currentPage' => 'current_page',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->totalRecordNum) {
            $res['total_record_num'] = $this->totalRecordNum;
        }
        if (null !== $this->totalPage) {
            $res['total_page'] = $this->totalPage;
        }
        if (null !== $this->currentPage) {
            $res['current_page'] = $this->currentPage;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return pagination
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['total_record_num'])){
            $model->totalRecordNum = $map['total_record_num'];
        }
        if(isset($map['total_page'])){
            $model->totalPage = $map['total_page'];
        }
        if(isset($map['current_page'])){
            $model->currentPage = $map['current_page'];
        }
        return $model;
    }
    /**
     * @description 总记录数
     * @var int
     */
    public $totalRecordNum;

    /**
     * @description 总页数
     * @var int
     */
    public $totalPage;

    /**
     * @description 当前页数
     * @var int
     */
    public $currentPage;

}
