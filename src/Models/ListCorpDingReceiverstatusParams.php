<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListCorpDingReceiverstatusParams extends Model {
    protected $_name = [
        'dingId' => 'ding_id',
        'pageSize' => 'page_size',
        'pageNo' => 'page_no',
        'confirmedStatus' => 'confirmed_status',
    ];
    public function validate() {
        Model::validateRequired('dingId', $this->dingId, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateMaximum('pageSize', $this->pageSize, 50);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->dingId) {
            $res['ding_id'] = $this->dingId;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->confirmedStatus) {
            $res['confirmed_status'] = $this->confirmedStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListCorpDingReceiverstatusParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ding_id'])){
            $model->dingId = $map['ding_id'];
        }
        if(isset($map['page_size'])){
            $model->pageSize = $map['page_size'];
        }
        if(isset($map['page_no'])){
            $model->pageNo = $map['page_no'];
        }
        if(isset($map['confirmed_status'])){
            $model->confirmedStatus = $map['confirmed_status'];
        }
        return $model;
    }
    /**
     * @description dingid
     * @var string
     */
    public $dingId;

    /**
     * @description 每页显示数量，最大值50
     * @var int
     */
    public $pageSize;

    /**
     * @description 分页页码，从1开始
     * @var int
     */
    public $pageNo;

    /**
     * @description 确认状态，三种情况：不传表示查所有；传0表示查未确认状态；传1表示查已经确认状态；
     * @var int
     */
    public $confirmedStatus;

}
