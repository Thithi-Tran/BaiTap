FROM bylexus/apache-php53

RUN apt-get update \
    && apt-get install -y php5-mysql \
    && apt-get install -y vim \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/

EXPOSE 80 443

COPY ./default /etc/apache2/sites-available/default