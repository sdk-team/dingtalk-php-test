<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Add_to_single_chatOapiCspaceParams extends Model {
    protected $_name = [
        'fileName' => 'file_name',
        'mediaId' => 'media_id',
        'userid' => 'userid',
        'agentId' => 'agent_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Add_to_single_chatOapiCspaceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['file_name'])){
            $model->fileName = $map['file_name'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        return $model;
    }
    /**
     * @description 文件名(需包含含扩展名),需要utf-8 urlEncode
     * @var string
     */
    public $fileName;

    /**
     * @description 调用钉盘上传文件接口得到的mediaid,需要utf-8 urlEncode
     * @var string
     */
    public $mediaId;

    /**
     * @description 文件发送者微应用的agentId
     * @var string
     */
    public $userid;

    /**
     * @description 文件接收人的userid
     * @var string
     */
    public $agentId;

}
