<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class TransactionOapiFileUploadParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'fileSize' => 'file_size',
        'chunkNumbers' => 'chunk_numbers',
        'uploadId' => 'upload_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->fileSize) {
            $res['file_size'] = $this->fileSize;
        }
        if (null !== $this->chunkNumbers) {
            $res['chunk_numbers'] = $this->chunkNumbers;
        }
        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TransactionOapiFileUploadParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['file_size'])){
            $model->fileSize = $map['file_size'];
        }
        if(isset($map['chunk_numbers'])){
            $model->chunkNumbers = $map['chunk_numbers'];
        }
        if(isset($map['upload_id'])){
            $model->uploadId = $map['upload_id'];
        }
        return $model;
    }
    /**
     * @description 微应用的agentId
     * @var string
     */
    public $agentId;

    /**
     * @description 文件大小
     * @var int
     */
    public $fileSize;

    /**
     * @description 文件总块数
     * @var int
     */
    public $chunkNumbers;

    /**
     * @description 上传事务id 需要utf-8 urlEncode
     * @var string
     */
    public $uploadId;

}
