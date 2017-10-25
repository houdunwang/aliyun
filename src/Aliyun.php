<?php namespace houdunwang\aliyun;

/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
use houdunwang\config\Config;

include_once __DIR__.'/../aliyun-openapi-php-sdk-master/aliyun-php-sdk-core/Config.php';

class Aliyun
{
    /**
     * 获取阿里云执行请求客户端
     *
     * @return \DefaultAcsClient
     */
    public static function client()
    {
        //regionId,根据服务器所在区域进行选择 https://help.aliyun.com/document_detail/40654.html?spm=5176.7114037.1996646101.1.OCtdEo
        $regionId        = Config::get('aliyun.regionId');
        $accessKeyId     = Config::get('aliyun.accessKeyId');
        $accessKeySecret = Config::get('aliyun.accessKeySecret');
        $iClientProfile  = \DefaultProfile::getProfile($regionId, $accessKeyId, $accessKeySecret);

        return new \DefaultAcsClient($iClientProfile);
    }
}