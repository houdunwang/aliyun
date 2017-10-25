<?php

use houdunwang\config\Config;

class BaseTest extends \PHPUnit\Framework\TestCase
{
    protected $data;

    public function setUp()
    {
        parent::setUp();
        date_default_timezone_set('Asia/Shanghai');
        Config::set('aliyun', [
            'regionId'        => 'cn-hangzhou',
            'accessKeyId'     => 'VUFGPITAyRwwi296',
            'accessKeySecret' => 'DQDn3RSYzZ8OgZrUUfcRrnPYJgZ43r',
        ]);
    }

    public function testBase()
    {
        $client  = \houdunwang\aliyun\Aliyun::client();
        $request = new \live\Request\V20161101\DescribeLiveStreamsPublishListRequest();
        $request->setActionName('DescribeLiveStreamsPublishList');
        $request->setDomainName('live.houdunren.com');
        $request->setStartTime(\Carbon\Carbon::instance(new DateTime('2017-05-22 3:33:12'))->format('Y-m-d\TH:i:s\Z'));
        $request->setEndTime(\Carbon\Carbon::instance(new DateTime('2017-05-23 3:33:12'))->format('Y-m-d\TH:i:s\Z'));
        $response = $client->getAcsResponse($request);
        print_r($response);
    }
}