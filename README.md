#ip2region extension for php
## 安装步骤
* 在php ext/目录下
    
        git clone https://git.oschina.net/monsterkiller/ip2region.git

* 运行 

        phpize
        ./configure
        make && sudo make install

* 配置ip2region db_file(cli 或者 fpm)
    
        extension=ip2region.so
        ip2region.db_file=/path/to/ip2region.db

* 测试 
在ext/ip2region/下运行
    
        php ip2region.php

