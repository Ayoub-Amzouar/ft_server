FROM debian:buster

COPY ./srcs/install.sh /
COPY ./srcs/default /
COPY ./srcs/run.sh /

RUN bash ./install.sh

CMD ["/bin/sh", "/run.sh"]
