<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiMicroappParams extends Model {
    protected $_name = [
        'appName' => 'appName',
        'appIcon' => 'appIcon',
        'appDesc' => 'appDesc',
        'homepageUrl' => 'homepageUrl',
        'pcHomepageUrl' => 'pcHomepageUrl',
        'ompLink' => 'ompLink',
        'agentId' => 'agentId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->appIcon) {
            $res['appIcon'] = $this->appIcon;
        }
        if (null !== $this->appDesc) {
            $res['appDesc'] = $this->appDesc;
        }
        if (null !== $this->homepageUrl) {
            $res['homepageUrl'] = $this->homepageUrl;
        }
        if (null !== $this->pcHomepageUrl) {
            $res['pcHomepageUrl'] = $this->pcHomepageUrl;
        }
        if (null !== $this->ompLink) {
            $res['ompLink'] = $this->ompLink;
        }
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiMicroappParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['appName'])){
            $model->appName = $map['appName'];
        }
        if(isset($map['appIcon'])){
            $model->appIcon = $map['appIcon'];
        }
        if(isset($map['appDesc'])){
            $model->appDesc = $map['appDesc'];
        }
        if(isset($map['homepageUrl'])){
            $model->homepageUrl = $map['homepageUrl'];
        }
        if(isset($map['pcHomepageUrl'])){
            $model->pcHomepageUrl = $map['pcHomepageUrl'];
        }
        if(isset($map['ompLink'])){
            $model->ompLink = $map['ompLink'];
        }
        if(isset($map['agentId'])){
            $model->agentId = $map['agentId'];
        }
        return $model;
    }
    /**
     * @description 微应用的名称。长度限制为1~10个字符
     * @var string
     */
    public $appName;

    /**
     * @description 微应用的图标。需要调用上传接口将图标上传到钉钉服务器后获取到的mediaId
     * @var string
     */
    public $appIcon;

    /**
     * @description 微应用的描述。长度限制为1~20个字符
     * @var string
     */
    public $appDesc;

    /**
     * @description 微应用的移动端主页，必须以http开头或https开头
     * @var string
     */
    public $homepageUrl;

    /**
     * @description 微应用的PC端主页，必须以http开头或https开头，如果不为空则必须与homepageUrl的域名一致
     * @var string
     */
    public $pcHomepageUrl;

    /**
     * @description 微应用的OA后台管理主页，必须以http开头或https开头
     * @var string
     */
    public $ompLink;

    /**
     * @description 微应用实例化id
     * @var int
     */
    public $agentId;

}
