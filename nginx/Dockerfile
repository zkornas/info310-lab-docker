FROM nginx:alpine

ADD nginx/default.conf /etc/nginx/conf.d

COPY nginx/src/html /usr/share/nginx/html

COPY ./data/ /var/www/html/