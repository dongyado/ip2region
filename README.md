#ip2region extension for php
ip2region 的PHP扩展，原项目https://git.oschina.net/lionsoul/ip2region.git

### 版本支持
php5 ： tag php5
phpng ： tag phpng


### 安装步骤
* 在php ext/目录下
    
        git clone https://git.oschina.net/monsterkiller/ip2region.git

* 在ext/ip2region下，运行 

        phpize
        ./configure
        make && sudo make install

* 配置ip2region.ini 指定db_file路径，(cli 或者 fpm)
    
        extension=ip2region.so
        ip2region.db_file=/path/to/ip2region.db

* 测试 

在ext/ip2region/下运行
    
        php ip2region.php

### 使用

参考ip2region/ip2region.php
