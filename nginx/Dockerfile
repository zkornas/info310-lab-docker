FROM nginx:alpine

ADD nginx/default.conf /etc/nginx/conf.d

COPY nginx/src/html /usr/share/nginx/html
COPY nginx/src/.htpasswd /etc/nginx/.htpasswd

COPY ./data/ /var/www/html/