FROM nginx:1.13.12-alpine

RUN apk --update --no-cache add python2 augeas gcc python2-dev musl-dev libffi-dev openssl openssl-dev py2-pip
WORKDIR /root/
RUN wget https://github.com/certbot/certbot/archive/v0.22.0.tar.gz && tar -xzf ./v0.22.0.tar.gz
WORKDIR /root/certbot-0.22.0
RUN pip install ./

# Cron job for the SSL certificate renewal
RUN set -ex \
    && crontab -l | { cat; echo "59 23 * * * certbot renew --standalone --pre-hook 'nginx -s stop' --post-hook 'nginx -c /etc/nginx/nginx.conf'"; } | crontab -

COPY ./sites-enabled/app.conf /etc/nginx/conf.d/
COPY ./ssl-params.conf /etc/nginx/conf.d/
COPY nginx.conf /etc/nginx/

RUN rm -f /etc/nginx/conf.d/default.conf

COPY entrypoint.sh /

COPY ./ssl /etc/ssl

RUN chmod +x /entrypoint.sh

WORKDIR /root

CMD ["/entrypoint.sh"]
