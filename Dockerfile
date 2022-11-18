FROM php:8.1.12-cli

RUN apt-get update && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev imagemagick graphicsmagick gifsicle libwebp-dev libonig-dev ffmpeg
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install gd mbstring pdo pdo_mysql gettext
RUN mkdir /app
RUN echo 'upload_max_filesize = 64M\n\
post_max_size = 64M\n'\
>> /usr/local/etc/php/conf.d/my.ini

WORKDIR /app

CMD ["php", "-S", "0.0.0.0:8080"]
