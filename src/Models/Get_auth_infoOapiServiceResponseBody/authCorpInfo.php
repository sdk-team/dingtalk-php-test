<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody;

use AlibabaCloud\Tea\Model;

class authCorpInfo extends Model {
    protected $_name = [
        'corpid' => 'corpid',
        'inviteCode' => 'invite_code',
        'industry' => 'industry',
        'corpName' => 'corp_name',
        'licenseCode' => 'license_code',
        'authChannel' => 'auth_channel',
        'authChannelType' => 'auth_channel_type',
        'isAuthenticated' => 'is_authenticated',
        'authLevel' => 'auth_level',
        'inviteUrl' => 'invite_url',
        'corpLogoUrl' => 'corp_logo_url',
        'belongCorpId' => 'belong_corp_id',
        'unifiedSocialCredit' => 'unifiedSocialCredit',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->inviteCode) {
            $res['invite_code'] = $this->inviteCode;
        }
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->licenseCode) {
            $res['license_code'] = $this->licenseCode;
        }
        if (null !== $this->authChannel) {
            $res['auth_channel'] = $this->authChannel;
        }
        if (null !== $this->authChannelType) {
            $res['auth_channel_type'] = $this->authChannelType;
        }
        if (null !== $this->isAuthenticated) {
            $res['is_authenticated'] = $this->isAuthenticated;
        }
        if (null !== $this->authLevel) {
            $res['auth_level'] = $this->authLevel;
        }
        if (null !== $this->inviteUrl) {
            $res['invite_url'] = $this->inviteUrl;
        }
        if (null !== $this->corpLogoUrl) {
            $res['corp_logo_url'] = $this->corpLogoUrl;
        }
        if (null !== $this->belongCorpId) {
            $res['belong_corp_id'] = $this->belongCorpId;
        }
        if (null !== $this->unifiedSocialCredit) {
            $res['unifiedSocialCredit'] = $this->unifiedSocialCredit;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return authCorpInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['invite_code'])){
            $model->inviteCode = $map['invite_code'];
        }
        if(isset($map['industry'])){
            $model->industry = $map['industry'];
        }
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        if(isset($map['license_code'])){
            $model->licenseCode = $map['license_code'];
        }
        if(isset($map['auth_channel'])){
            $model->authChannel = $map['auth_channel'];
        }
        if(isset($map['auth_channel_type'])){
            $model->authChannelType = $map['auth_channel_type'];
        }
        if(isset($map['is_authenticated'])){
            $model->isAuthenticated = $map['is_authenticated'];
        }
        if(isset($map['auth_level'])){
            $model->authLevel = $map['auth_level'];
        }
        if(isset($map['invite_url'])){
            $model->inviteUrl = $map['invite_url'];
        }
        if(isset($map['corp_logo_url'])){
            $model->corpLogoUrl = $map['corp_logo_url'];
        }
        if(isset($map['belong_corp_id'])){
            $model->belongCorpId = $map['belong_corp_id'];
        }
        if(isset($map['unifiedSocialCredit'])){
            $model->unifiedSocialCredit = $map['unifiedSocialCredit'];
        }
        return $model;
    }
    /**
     * @description corpid
     * @var string
     */
    public $corpid;

    /**
     * @description invite_code
     * @var string
     */
    public $inviteCode;

    /**
     * @description industry
     * @var string
     */
    public $industry;

    /**
     * @description corp_name
     * @var string
     */
    public $corpName;

    /**
     * @description license_code
     * @var string
     */
    public $licenseCode;

    /**
     * @description auth_channel
     * @var string
     */
    public $authChannel;

    /**
     * @description auth_channel_type
     * @var string
     */
    public $authChannelType;

    /**
     * @description is_authenticated
     * @var bool
     */
    public $isAuthenticated;

    /**
     * @description auth_level
     * @var int
     */
    public $authLevel;

    /**
     * @description invite_url
     * @var string
     */
    public $inviteUrl;

    /**
     * @description corp_logo_url
     * @var string
     */
    public $corpLogoUrl;

    /**
     * @description belong_corp_id
     * @var string
     */
    public $belongCorpId;

    /**
     * @description unifiedSocialCredit
     * @var string
     */
    public $unifiedSocialCredit;

}
