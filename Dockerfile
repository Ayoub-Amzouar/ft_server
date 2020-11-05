FROM debian:buster

COPY ./srcs/install.sh /

RUN bash ./install.sh
