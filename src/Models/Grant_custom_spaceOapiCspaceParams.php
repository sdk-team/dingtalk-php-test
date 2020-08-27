<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Grant_custom_spaceOapiCspaceParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'domain' => 'domain',
        'type' => 'type',
        'userid' => 'userid',
        'path' => 'path',
        'fileids' => 'fileids',
        'duration' => 'duration',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->fileids) {
            $res['fileids'] = $this->fileids;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Grant_custom_spaceOapiCspaceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['domain'])){
            $model->domain = $map['domain'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['path'])){
            $model->path = $map['path'];
        }
        if(isset($map['fileids'])){
            $model->fileids = $map['fileids'];
        }
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        return $model;
    }
    /**
     * @description ISV调用时传入，授权访问指定微应用的自定义空间
     * @var string
     */
    public $agentId;

    /**
     * @description 权限类型，目前支持上传和下载，上传请传add，下载请传download
     * @var string
     */
    public $domain;

    /**
     * @description 企业调用时传入，授权访问该domain的自定义空间
     * @var string
     */
    public $type;

    /**
     * @description 企业用户userid
     * @var string
     */
    public $userid;

    /**
     * @description 授权访问的路径，如授权访问所有文件传“/”，授权访问/doc文件夹传“/doc/” 需要utf-8 urlEncode
     * @var string
     */
    public $path;

    /**
     * @description 授权访问的文件id列表，id之间用英文逗号隔开，如“fileId1,fileId2”
     * @var string
     */
    public $fileids;

    /**
     * @description 权限有效时间，有效范围为0~3600秒，超出此范围或不传默认为30秒
     * @var int
     */
    public $duration;

}
