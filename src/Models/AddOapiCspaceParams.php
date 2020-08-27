<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddOapiCspaceParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'code' => 'code',
        'mediaId' => 'media_id',
        'folderId' => 'folder_id',
        'spaceId' => 'space_id',
        'name' => 'name',
        'overwrite' => 'overwrite',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        if (null !== $this->folderId) {
            $res['folder_id'] = $this->folderId;
        }
        if (null !== $this->spaceId) {
            $res['space_id'] = $this->spaceId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->overwrite) {
            $res['overwrite'] = $this->overwrite;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiCspaceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        if(isset($map['folder_id'])){
            $model->folderId = $map['folder_id'];
        }
        if(isset($map['space_id'])){
            $model->spaceId = $map['space_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['overwrite'])){
            $model->overwrite = $map['overwrite'];
        }
        return $model;
    }
    /**
     * @description 微应用的agentId
     * @var string
     */
    public $agentId;

    /**
     * @description 如果是微应用，code值为微应用免登授权码,如果是服务窗应用，code值为服务窗免登授权码。code为临时授权码，只能消费一次，下次请求需要重新获取新的code。
     * @var string
     */
    public $code;

    /**
     * @description 调用钉盘上传文件接口得到的mediaid, 需要utf-8 urlEncode
     * @var string
     */
    public $mediaId;

    /**
     * @description 调用云盘选择控件后获取的用户钉盘空间ID
     * @var string
     */
    public $folderId;

    /**
     * @description 调用云盘选择控件后获取的用户钉盘文件夹ID
     * @var string
     */
    public $spaceId;

    /**
     * @description 上传文件的名称，不能包含非法字符，需要utf-8 urlEncode
     * @var string
     */
    public $name;

    /**
     * @description 遇到同名文件是否覆盖，若不覆盖，则会自动重命名本次新增的文件，默认为false
     * @var bool
     */
    public $overwrite;

}
