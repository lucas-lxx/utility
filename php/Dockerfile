FROM php:8.3-cli

ARG USER_ID
ARG GROUP_ID

RUN addgroup --gid ${GROUP_ID} user
RUN useradd -u ${USER_ID} -g ${GROUP_ID} -m -s /bin/bash -p "" user
USER user

WORKDIR /app

ENTRYPOINT [ "php" ]
