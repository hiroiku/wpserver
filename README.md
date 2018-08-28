# WPSERVER

## Setup

### Download Wordpress

```bash
composer wp:download -- --locale=ja
```

### Connecting to database

1. Copy wp-config-sample.php to wp-config.php
2. Edit wp-config.php

## Launch Server

```bash
composer start
```

## Update

### Update WordPress

```bash
composer wp:update
```

### Update WP CLI

```bash
composer wp cli update
```

## WP CLI

```bash
composer wp <command>
```
