
一斗老师 2018/3/28 19:25:17
<pre>
server{
    listen 80;
    server_name htc327.com  www.htc327.com;
    access_log /data/wwwlogs/access_nginx.log combined;
    root /data/project/htc/www.htc327.com;
    index index.html index.htm index.php;


    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }


    location ~* \.(mp4|avi|wmv|swf|flv|mp3)$ {

    deny all;
        }

    location /nginx_status {
        stub_status on;
        access_log off;
        allow 127.0.0.1;
        deny all;
        }
    location ~ [^/]\.php(/|$) {
        fastcgi_pass unix:/dev/shm/php7-cgi.sock;
        fastcgi_index index.php;
        include fastcgi.conf;
        }
    location ~ .*\.(gif|jpg|jpeg|png|bmp|swf|flv|ico)$ {
    expires 30d;
        access_log off;
        }
    location ~ .*\.(js|css)?$ {
    expires 7d;
        access_log off;
        }
}
</pre>