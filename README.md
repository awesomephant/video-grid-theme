
# Wordpress theme for an untitled video grid website

## Required Plugins

- Timber Library
- Advanced Custom Fields Pro
- Custom Post Type UI

## Development Setup

`yarn`, `yarn run start` to install dependencies and start a local development server. Javascript assets are compiled by webpack, Sass is processed by node sass, development server and livereloaded is done by BrowserSync. We're starting all of these processes directly from the ```package.json```, so there is no need for a dedicated task runner.

The development server assumes you have Wordpress running locally at `video-grid.test` through something like [VVV](https://github.com/Varying-Vagrant-Vagrants/VVV). You can change that URL by editing ```packagage.json```.

We're using [Timber](https://timber.github.io/docs/) so we can write templates in Liquid. These live in the ```/views``` directory.

## Team

- William Jacobson ([Website](https://www.seansteed.com/))
- Max Kohler ([Website](http://maxkoehler.com), [Twitter](https://twitter.com/maxakohler)