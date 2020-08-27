<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessinstanceResponseBody\processInstance\operationRecords;

use AlibabaCloud\Tea\Model;

class attachments extends Model {
    protected $_name = [
        'fileName' => 'file_name',
        'fileSize' => 'file_size',
        'fileId' => 'file_id',
        'fileType' => 'file_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['file_size'] = $this->fileSize;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->fileType) {
            $res['file_type'] = $this->fileType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return attachments
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['file_name'])){
            $model->fileName = $map['file_name'];
        }
        if(isset($map['file_size'])){
            $model->fileSize = $map['file_size'];
        }
        if(isset($map['file_id'])){
            $model->fileId = $map['file_id'];
        }
        if(isset($map['file_type'])){
            $model->fileType = $map['file_type'];
        }
        return $model;
    }
    /**
     * @description 附件名称
     * @var string
     */
    public $fileName;

    /**
     * @description 大小
     * @var string
     */
    public $fileSize;

    /**
     * @description id
     * @var string
     */
    public $fileId;

    /**
     * @description 类型
     * @var string
     */
    public $fileType;

}
