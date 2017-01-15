This docker image contains socat. It can be used to make the docker-remote-api available on a local mac environment.

#### Usage

```bash
docker run -d --name socat-docker-remote-api -v /var/run/docker.sock:/var/run/docker.sock -p 2376:2375 rastu/alpine-socat:latest TCP4-LISTEN:2375,fork,reuseaddr UNIX-CONNECT:/var/run/docker.sock
```

#### Links
- https://docs.docker.com/engine/reference/api/docker_remote_api/
- https://blog.jetbrains.com/phpstorm/2015/10/docker-support-in-phpstorm/
- https://www.jetbrains.com/help/idea/2016.2/docker.html