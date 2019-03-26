ThinkCMF Swoole 扩展
===============
本扩展是基于`topthink/think-swoole`优化，方便ThinkCMF用户快速使用swoole运行自己的项目。原则上你可以使用相同的代码同时支持`PHP-FPM`和`Swoole`
## 安装 swoole
详细的 swoole安装可以参数 swoole官方文档，https://wiki.swoole.com/wiki/page/6.html

## 安装 cmf-swoole扩展
```
composer require thinkcmf/cmf-swoole:~5.1.0
```
## 启动 swoole
cd到程序根目录，执行如下命令：
```
php think swoole
```
swoole启动后会输出如下内容：
```
Starting swoole http server...
Swoole http server started: http://0.0.0.0:9501;
You can exit with `CTRL-C`
```
此时 swoole就启动成功了！
swoole默认端口是9501，监听所有 ip。在浏览器中输入 swoole所在主机的 ip加端口9501，就可以访问页面了。
 如果想关闭，只要按 `CTRL+C`组合键就可以关闭 swoole了。

##  守护进程方式启动 swoole
同样cd到程序根目录，但要执行如下命令：
```
php think swoole -d
```
此 swoole会以后台守护进程的方式运行，要想停止 swoole就要使用下面的命名了：
```
php think swoole stop
```


## 指定IP和端口号
默认IP是`0.0.0.0`，默认端口是`9501`
### 指定swoole IP
```
php think swoole -H 127.0.0.1
```
或
```
php think swoole --host=127.0.0.1
```
### 指定swoole端口
```
php think swoole -p 9502
```
或
```
php think swoole --port=9502
```

## 重启 swoole
```
php think swoole restart
```
## 优雅重载swoole
此种方式会平滑地重启所有 worker进程
```
php think swoole reload
```
# Swoole API
## 启动 swoole api服务
swoole下 RESTful和普通 web服务是分开的；默认 IP:`0.0.0.0`，默认端口:`9502`
```
php think swoole:api
```
同样支持守护模式
```
php think swoole:api -d
```
指定 IP和端口
```
php think swoole:api -d -p 9502 -H 127.0.0.1
```
停止api服务
```
php think swoole:api  stop
```
重启api服务
```
php think swoole:api   restart
```
重载api服务
```
php think swoole:api    reload
```

## 项目案例
### ThinkCMF WebSocket Demo:
WebSocket演示插件 http://thinkcmf.yyw66.cn/ws.html 


## 更新日志

### 5.1.4
* 增加`swoole_server_start`,`swoole_worker_start`,`swoole_websocket_on_open`,`swoole_websocket_on_close`钩子
* 增加`WebSocket`独立运行命令
* 增加`WebSocket onOpen`回调
* 修复`WebSocket`事件引起的数据库执行报错
* 修复`WebSocket`发送消息未判断是否为`WebSocket`连接
* 增加`worker`进程启动时自动初始化所有模块

### 5.1.3
* 修复文件更改后worker重启后部分请求cookie报错
* 修复data/config目录不存在时文件定时刷新报错
* 修复无法识别?s=app/controller/action路径
* `gitignore`过滤 composer.lock文件

