# Web Thumbnailer

A simple Docker API wrapper to [Arthur Hoaro's Web Thumbnailer](https://github.com/ArthurHoaro/web-thumbnailer) which generates an image/poster representation of a website. Useful for visual bookmarking.

## Use

```
docker-compose up -d
```

Then:

```
http://localhost:8000/?url=<website_url>&b=1&mw=200&mh=200
```

**url:** the website's url.

**b:** if set to 1 the url above is assumed to be base64 encoded using the method found in inc/php-jwt-urlsafeB64.php. This is a safer way to pass a url via the querystring. Defaults to 0 if not provided.

**mw:** maximum width of the image to generate. Defaults to 1000 if not provided.

**mh:** maximum height of the image to generate. Defaults to 1000 if not provided.

## Disclaimer

Careful not to expose this API to public use. (It's intended to be used in a local or controlled environment e.g. behind a reverse proxy.)