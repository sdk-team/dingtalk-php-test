<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GenerateOapiCspaceAuthParams extends Model {
    protected $_name = [
        'duration' => 'duration',
        'path' => 'path',
        'agentId' => 'agent_id',
        'fileIds' => 'file_ids',
        'type' => 'type',
        'appId' => 'app_id',
    ];
    public function validate() {
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('appId', $this->appId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->fileIds) {
            $res['file_ids'] = $this->fileIds;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GenerateOapiCspaceAuthParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        if(isset($map['path'])){
            $model->path = $map['path'];
        }
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['file_ids'])){
            if(!empty($map['file_ids'])){
                $model->fileIds = $map['file_ids'];
            }
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
        }
        return $model;
    }
    /**
     * @description 授权码有效期，单位为日，为空则表示永久授权
     * @var int
     */
    public $duration;

    /**
     * @description 授权访问的路径，如授权访问所有文件传"/"，授权访问/doc文件夹传"/doc/"，需要utf-8 urlEncode, type=add时必须传递
     * @var string
     */
    public $path;

    /**
     * @description 微应用的agentId
     * @var int
     */
    public $agentId;

    /**
     * @description 授权访问的文件id列表，id之间用英文逗号隔开，如"fileId1,fileId2", type=download时必须传递
     * @var array
     */
    public $fileIds;

    /**
     * @description 权限类型，目前支持上传和预览，上传请传add，预览请传download
     * @var string
     */
    public $type;

    /**
     * @description 被授权的应用appId
     * @var int
     */
    public $appId;

}
