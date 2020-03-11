FROM nginx:1.15.12
ADD ./public/ /app/public/
ADD ./docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf
RUN cat /etc/nginx/nginx.conf
