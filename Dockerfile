FROM ubuntu

RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive /usr/bin/apt-get install -y apache2 php7.2 php7.2-mysqli openssh-server ssh sudo && \
    apt-get clean && \
    rm /var/lib/apt/lists/*_*

COPY www /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN rm /var/www/html/index.html

WORKDIR /var/www/html

ENTRYPOINT apachectl -D FOREGROUND
