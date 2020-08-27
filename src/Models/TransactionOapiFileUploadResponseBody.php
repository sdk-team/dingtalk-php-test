<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class TransactionOapiFileUploadResponseBody extends Model {
    protected $_name = [
        'uploadId' => 'upload_id',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
        'mediaId' => 'media_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TransactionOapiFileUploadResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['upload_id'])){
            $model->uploadId = $map['upload_id'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        return $model;
    }
    /**
     * @description upload_id
     * @var string
     */
    public $uploadId;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

    /**
     * @description 文件存储id
     * @var string
     */
    public $mediaId;

}
