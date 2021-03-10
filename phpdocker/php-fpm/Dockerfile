FROM phpdockerio/php74-fpm:latest
WORKDIR "/application"

# Fix warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install mysql extension
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.4-mysql \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*