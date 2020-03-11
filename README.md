# Tideways MongoDB Segfault

## Installation

- `docker-compose -f docker-compose.development.yml build`
- `docker-compose -f docker-compose.development.yml up`

Now Connect to http://localhost:6680

## Log

```
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] PHP received segfault signal: 11
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] PHP Backtrace:
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(+0x27d17) [0x7faab1fddd17]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(+0x27dcd) [0x7faab1fdddcd]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /lib/x86_64-linux-gnu/libc.so.6(+0x37840) [0x7faab54bc840]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tracing_trace_callback_mongodb_connect+0x75) [0x7faab1fd2125]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tracing_trace_function_start+0x44) [0x7faab1fd6754]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tracer_overwrite_mongodb_driver_manager____construct+0xdc) [0x7faab1ff467c]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tideways_execute_internal+0x145) [0x7faab2038575]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so(+0x132cc) [0x7faab26292cc]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(+0x22ea37) [0x5627d87e3a37]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(execute_ex+0x196d) [0x5627d8b3172d]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tideways_execute_ex+0x2b) [0x7faab2038bbb]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so(+0x12ad6) [0x7faab2628ad6]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(+0x22e9d4) [0x5627d87e39d4]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(execute_ex+0x196d) [0x5627d8b3172d]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tideways_execute_ex+0x2b) [0x7faab2038bbb]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so(+0x12ad6) [0x7faab2628ad6]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(+0x563cfc) [0x5627d8b18cfc]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(execute_ex+0x196d) [0x5627d8b3172d]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tideways_execute_ex+0x2b) [0x7faab2038bbb]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so(+0x12ad6) [0x7faab2628ad6]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(zend_execute+0x133) [0x5627d8b388d3]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(zend_execute_scripts+0xc3) [0x5627d8ab3213]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(php_execute_script+0x250) [0x5627d8a534e0]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(+0x23d070) [0x5627d87f2070]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xeb) [0x7faab54a909b]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(_start+0x2a) [0x5627d87f34aa]
nginx_1            | 2020/03/11 15:09:20 [error] 9#9: *1 recv() failed (104: Connection reset by peer) while reading response header from upstream, client: 172.27.0.1, server: _, request: "GET / HTTP/1.1", upstream: "fastcgi://172.27.0.4:9000", host: "localhost:6680"
php-web_1          | [11-Mar-2020 15:09:20] WARNING: [pool www] child 6 exited with code 11 after 0.007995 seconds from start
nginx_1            | 172.27.0.1 - - [11/Mar/2020:15:09:20 +0000] "GET / HTTP/1.1" 502 552 "-" "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/80.0.3987.87 Chrome/80.0.3987.87 Safari/537.36" "-"
php-web_1          | [11-Mar-2020 15:09:20] NOTICE: [pool www] child 7 started
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] PHP received segfault signal: 11
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] PHP Backtrace:
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(+0x27d17) [0x7faab1fddd17]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(+0x27dcd) [0x7faab1fdddcd]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /lib/x86_64-linux-gnu/libc.so.6(+0x37840) [0x7faab54bc840]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tracing_trace_callback_mongodb_connect+0x75) [0x7faab1fd2125]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tracing_trace_function_start+0x44) [0x7faab1fd6754]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tracer_overwrite_mongodb_driver_manager____construct+0xdc) [0x7faab1ff467c]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tideways_execute_internal+0x145) [0x7faab2038575]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so(+0x132cc) [0x7faab26292cc]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(+0x22ea37) [0x5627d87e3a37]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(execute_ex+0x196d) [0x5627d8b3172d]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tideways_execute_ex+0x2b) [0x7faab2038bbb]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so(+0x12ad6) [0x7faab2628ad6]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(+0x22e9d4) [0x5627d87e39d4]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(execute_ex+0x196d) [0x5627d8b3172d]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tideways_execute_ex+0x2b) [0x7faab2038bbb]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so(+0x12ad6) [0x7faab2628ad6]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(+0x563cfc) [0x5627d8b18cfc]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(execute_ex+0x196d) [0x5627d8b3172d]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/tideways.so(tideways_execute_ex+0x2b) [0x7faab2038bbb]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so(+0x12ad6) [0x7faab2628ad6]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(zend_execute+0x133) [0x5627d8b388d3]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(zend_execute_scripts+0xc3) [0x5627d8ab3213]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(php_execute_script+0x250) [0x5627d8a534e0]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(+0x23d070) [0x5627d87f2070]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xeb) [0x7faab54a909b]
php-web_1          | [11-Mar-2020 16:09:20 Europe/Berlin] [tideways.ERROR] php-fpm: pool www(_start+0x2a) [0x5627d87f34aa]
php-web_1          | [11-Mar-2020 15:09:20] WARNING: [pool www] child 7 exited with code 11 after 0.107533 seconds from start
```
