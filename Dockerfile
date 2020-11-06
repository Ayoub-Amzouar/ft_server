FROM debian:buster

COPY ./srcs/* /

RUN bash ./install.sh

CMD bash ./run.sh
