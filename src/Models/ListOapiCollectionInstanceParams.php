<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiCollectionInstanceParams extends Model {
    protected $_name = [
        'formCode' => 'form_code',
        'actionDate' => 'action_date',
        'offset' => 'offset',
        'size' => 'size',
        'bizType' => 'biz_type',
    ];
    public function validate() {
        Model::validateRequired('formCode', $this->formCode, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->formCode) {
            $res['form_code'] = $this->formCode;
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
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiCollectionInstanceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['form_code'])){
            $model->formCode = $map['form_code'];
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
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        return $model;
    }
    /**
     * @description 填表code
     * @var string
     */
    public $formCode;

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

    /**
     * @description 填表类型
     * @var int
     */
    public $bizType;

}
