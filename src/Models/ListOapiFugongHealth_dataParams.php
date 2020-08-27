<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiFugongHealth_dataParams extends Model {
    protected $_name = [
        'processInstanceId' => 'process_instance_id',
        'actionDate' => 'action_date',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
        Model::validateRequired('actionDate', $this->actionDate, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        if (null !== $this->actionDate) {
            $res['action_date'] = $this->actionDate;
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
     * @return ListOapiFugongHealth_dataParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        if(isset($map['action_date'])){
            $model->actionDate = $map['action_date'];
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
     * @description 复工审批实例id
     * @var string
     */
    public $processInstanceId;

    /**
     * @description 时间，必须是YYYY-MM-DD的格式
     * @var string
     */
    public $actionDate;

    /**
     * @description 分页起始
     * @var int
     */
    public $offset;

    /**
     * @description 分页大小，最大100
     * @var int
     */
    public $size;

}
