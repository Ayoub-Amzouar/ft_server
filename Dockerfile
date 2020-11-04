FROM debian:buster

COPY ./srcs/install.sh /

CMD ["/bin/sh","./install.sh"]
