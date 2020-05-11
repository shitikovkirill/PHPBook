FROM node:12

WORKDIR /app
COPY package.json yarn.lock ./
ADD . /app
RUN yarn

EXPOSE 3000