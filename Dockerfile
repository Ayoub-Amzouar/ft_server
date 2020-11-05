FROM debian:buster

COPY ./srcs/install.sh /
COPY ./srcs/default /

RUN bash ./install.sh
