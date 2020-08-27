<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param;

use AlibabaCloud\Tea\Model;

class resumeFile extends Model {
    protected $_name = [
        'downloadUrl' => 'download_url',
        'fileType' => 'file_type',
        'fileName' => 'file_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['download_url'] = $this->downloadUrl;
        }
        if (null !== $this->fileType) {
            $res['file_type'] = $this->fileType;
        }
        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return resumeFile
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['download_url'])){
            $model->downloadUrl = $map['download_url'];
        }
        if(isset($map['file_type'])){
            $model->fileType = $map['file_type'];
        }
        if(isset($map['file_name'])){
            $model->fileName = $map['file_name'];
        }
        return $model;
    }
    /**
     * @description 下载地址
     * @var string
     */
    public $downloadUrl;

    /**
     * @description 文件类型
     * @var string
     */
    public $fileType;

    /**
     * @description 文件名，需要带后缀
     * @var string
     */
    public $fileName;

}
