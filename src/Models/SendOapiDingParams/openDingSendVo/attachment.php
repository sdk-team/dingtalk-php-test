<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiDingParams\openDingSendVo;

use AlibabaCloud\Tea\Model;

class attachment extends Model {
    protected $_name = [
        'detailType' => 'detail_type',
        'linkTitle' => 'link_title',
        'fileName' => 'file_name',
        'fileSize' => 'file_size',
        'linkUrl' => 'link_url',
        'fileSpaceId' => 'file_space_id',
        'linkText' => 'link_text',
        'type' => 'type',
        'linkPicUrl' => 'link_pic_url',
        'fileId' => 'file_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->detailType) {
            $res['detail_type'] = $this->detailType;
        }
        if (null !== $this->linkTitle) {
            $res['link_title'] = $this->linkTitle;
        }
        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['file_size'] = $this->fileSize;
        }
        if (null !== $this->linkUrl) {
            $res['link_url'] = $this->linkUrl;
        }
        if (null !== $this->fileSpaceId) {
            $res['file_space_id'] = $this->fileSpaceId;
        }
        if (null !== $this->linkText) {
            $res['link_text'] = $this->linkText;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->linkPicUrl) {
            $res['link_pic_url'] = $this->linkPicUrl;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return attachment
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['detail_type'])){
            $model->detailType = $map['detail_type'];
        }
        if(isset($map['link_title'])){
            $model->linkTitle = $map['link_title'];
        }
        if(isset($map['file_name'])){
            $model->fileName = $map['file_name'];
        }
        if(isset($map['file_size'])){
            $model->fileSize = $map['file_size'];
        }
        if(isset($map['link_url'])){
            $model->linkUrl = $map['link_url'];
        }
        if(isset($map['file_space_id'])){
            $model->fileSpaceId = $map['file_space_id'];
        }
        if(isset($map['link_text'])){
            $model->linkText = $map['link_text'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['link_pic_url'])){
            $model->linkPicUrl = $map['link_pic_url'];
        }
        if(isset($map['file_id'])){
            $model->fileId = $map['file_id'];
        }
        return $model;
    }
    /**
     * @description 文件后缀, 用于展示文件对应图标
     * @var string
     */
    public $detailType;

    /**
     * @description 链接标题
     * @var string
     */
    public $linkTitle;

    /**
     * @description 文件名
     * @var string
     */
    public $fileName;

    /**
     * @description 文件大小(单位:Byte, 最大2G)
     * @var int
     */
    public $fileSize;

    /**
     * @description 链接URL
     * @var string
     */
    public $linkUrl;

    /**
     * @description 上传DING盘后的SpaceId
     * @var string
     */
    public $fileSpaceId;

    /**
     * @description 链接摘要
     * @var string
     */
    public $linkText;

    /**
     * @description 附件类型:img-图片,link-链接,file-文件
     * @var string
     */
    public $type;

    /**
     * @description 链接缩略图
     * @var string
     */
    public $linkPicUrl;

    /**
     * @description 上传DING盘后的文件ID
     * @var string
     */
    public $fileId;

}
