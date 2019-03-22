ThinkCMF Swoole 扩展
===============

## 更新日志

### 5.1.4-dev
* 增加swoole_server_start,swoole_worker_start,swoole_websocket_on_close钩子配置
* 增加`WebSocket`独立运行命令

### 5.1.3
* 修复文件更改后worker重启后部分请求cookie报错
* 修复data/config目录不存在时文件定时刷新报错
* 修复无法识别?s=app/controller/action路径
* `gitignore`过滤 composer.lock文件

