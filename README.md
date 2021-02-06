# Piwigo for YunoHost

[![Integration level](https://dash.yunohost.org/integration/piwigo.svg)](https://dash.yunohost.org/appci/app/piwigo) ![](https://ci-apps.yunohost.org/ci/badges/piwigo.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/piwigo.maintain.svg)  
[![Install Piwigo with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=piwigo)

> *This package allow you to install Piwigo quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## Overview

[Piwigo](http://piwigo.org) is a photo gallery software for the web, built by an active community of users and developers. Extensions make Piwigo easily customizable.

**Shipped version:** 11.3.0

## Screenshots

![](sources/screenshot_Piwigo.jpg)

## Demo

* [Official demo](http://piwigo.org/demo/)

## Configuration

## Documentation

 * Official documentation: https://piwigo.org/doc/doku.php
 * YunoHost documentation: https://yunohost.org/#/app_piwigo

## YunoHost specific features

In addition to Piwigo core features, the following are made available with this package:
 * Integrate with YunoHost users and SSO:
   * private mode: limit access to YunoHost users
   * public mode:
     * SSO for YunoHost users
     * allow other users management, and guest mode
 * Allow one YunoHost user to be the administrator (set at the installation)

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/piwigo%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/piwigo/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/piwigo%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/piwigo/)

## Limitations

## Additionnal informations

## Links

 * Report a bug: https://github.com/YunoHost-Apps/piwigo_ynh/issues
 * Piwigo website: http://piwigo.org/
 * Piwigo repository: https://github.com/Piwigo/Piwigo
 * YunoHost website: https://yunohost.org/

---

## Developers infos

Please do your pull request to the [testing branch](https://github.com/YunoHost-Apps/piwigo_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/piwigo_ynh/tree/testing --debug
or
sudo yunohost app upgrade piwigo -u https://github.com/YunoHost-Apps/piwigo_ynh/tree/testing --debug
```
