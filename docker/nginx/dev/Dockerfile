FROM nginx:1.13.12-alpine

COPY ./sites-enabled /etc/nginx/conf.d/

COPY nginx.conf /etc/nginx/

RUN rm -f /etc/nginx/conf.d/default.conf

COPY entrypoint.sh /
RUN chmod +x /entrypoint.sh

WORKDIR /root

CMD ["/entrypoint.sh"]
