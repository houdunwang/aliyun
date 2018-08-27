# 阿里云

提供了常用的阿里云服务操作方法，是对阿里云[官网SDK](https://help.aliyun.com/document_detail/53111.html)的封装，整体使用安装可靠。

## 配置
```
\Houdunwang\Aliyun\Config::config([
    /*
    |--------------------------------------------------------------------------
    | 根据服务器所在区域进行选择
    | https://help.aliyun.com/document_detail/40654.html?spm=5176.7114037.1996646101.1.OCtdEo
    */
    'regionId'  => 'cn-hangzhou',
    /*
    |--------------------------------------------------------------------------
    | 如果使用主账号访问，登陆阿里云 AccessKey 管理页面创建、查看
    | 如果使用子账号访问，请登录阿里云访问控制控制台查看
    */
    'accessId'  => '',
    /*
    |--------------------------------------------------------------------------
    | 如果使用主账号访问，登陆阿里云 AccessKey 管理页面创建、查看
    | 如果使用子账号访问，请登录阿里云访问控制控制台查看
    */
    'accessKey' => '',
]);
```

## 直播

### 获取推流地址

推流地址用于OBS等推流软件播放使用
方法说明：

```
\houdunwang\aliyun\Aliyun::instance('Live')->url($url, $key, $hour)
```

参数说明：
```
$url	直播链接
$key	加密密钥
$hour	生成的链接地址从重成开始可以使用时间，超过这个时间将无效。
```

使用示例：
```
$url    = 'rtmp://video-center.alivecdn.com/houdunren/app?vhost=live.houdunren.com';
\houdunwang\aliyun\Aliyun::instance('Live')->url($url,'houdunwang',5);
```
上面 $url 变量的参数说明
```
houdunren	直播流所属应用名称
app			直播流名称
vhost		直播域名，登录阿里云后台进行查看
```

### 接口使用

直播系统了很多接口，具体请参考[阿里官网手册](https://help.aliyun.com/document_detail/48207.html?spm=5176.7991389.632961.2.G5Hkk9)，下面我以一个接口来讲解使用方法，其他的使用请参考手册，其实就是传递些参数而已。

查看某个域名下所有流的信息

```
//实例化直播对象
$request = \Houdunwang\Aliyun\Aliyun::instance('Live')->request();

//下面是根据手册设置的参数，具体参数含义请查看手册
$request->setActionName('DescribeLiveStreamsPublishList');
$request->setDomainName('live.houdunren.com');
$request->setStartTime(\Carbon\Carbon::instance(new DateTime('2017-05-22 3:33:12'))->format('Y-m-d\TH:i:s\Z'));
$request->setEndTime(\Carbon\Carbon::instance(new DateTime('2017-05-23 3:33:12'))->format('Y-m-d\TH:i:s\Z'));

//发送请求
$response = \Houdunwang\Aliyun\Aliyun::client()->getAcsResponse($request);
print_r($response);
```

## 邮件
```
//阿里云请求实例
$request = \Houdunwang\Aliyun\Aliyun::instance('Mail')->request();
//控制台创建的发信地址
$request->setAccountName("edu@vip.houdunren.com");
//发信人昵称
$request->setFromAlias("后盾向军");
$request->setAddressType(1);
$request->setTagName("控制台创建的标签");
$request->setReplyToAddress("true");
$request->setToAddress("2300071698@qq.com");
$request->setSubject("邮件主题-后盾人");
$request->setHtmlBody("邮件正文-后盾人 人人做后盾");

try {
	//发送请求
	$response = \Houdunwang\Aliyun\Aliyun::client()->getAcsResponse($request);
	print_r($response);
} catch (ClientException  $e) {
	print_r($e->getErrorCode());
	print_r($e->getErrorMessage());
} catch (ServerException  $e) {
	print_r($e->getErrorCode());
	print_r($e->getErrorMessage());
}
```



## 短信