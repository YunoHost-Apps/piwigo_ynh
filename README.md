<!--
N.B.: This README was automatically generated by https://github.com/YunoHost/apps/tree/master/tools/README-generator
It shall NOT be edited by hand.
-->

# Piwigo for YunoHost

[![Integration level](https://dash.yunohost.org/integration/piwigo.svg)](https://dash.yunohost.org/appci/app/piwigo) ![Working status](https://ci-apps.yunohost.org/ci/badges/piwigo.status.svg) ![Maintenance status](https://ci-apps.yunohost.org/ci/badges/piwigo.maintain.svg)

[![Install Piwigo with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=piwigo)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install Piwigo quickly and simply on a YunoHost server.
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview

[Piwigo](http://piwigo.org) is a photo gallery software for the web, built by an active community of users and developers. Extensions make Piwigo easily customizable.


**Shipped version:** 14.0.0~ynh1

**Demo:** https://piwigo.org/demo

## Screenshots

![Screenshot of Piwigo](./doc/screenshots/screenshot_Piwigo.jpg)

## Disclaimers / important information

## YunoHost specific features

In addition to Piwigo core features, the following are made available with this package:
 * Integrate with YunoHost users and SSO:
   * private mode: limit access to YunoHost users
   * public mode:
     * SSO for YunoHost users
     * allow other users management, and guest mode
 * Allow one YunoHost user to be the administrator (set at the installation)

## Documentation and resources

* Official app website: <http://piwigo.org>
* Official admin documentation: <https://piwigo.org/guides>
* Upstream app code repository: <https://github.com/Piwigo/Piwigo>
* YunoHost Store: <https://apps.yunohost.org/app/piwigo>
* Report a bug: <https://github.com/YunoHost-Apps/piwigo_ynh/issues>

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/piwigo_ynh/tree/testing).

To try the testing branch, please proceed like that.

``` bash
sudo yunohost app install https://github.com/YunoHost-Apps/piwigo_ynh/tree/testing --debug
or
sudo yunohost app upgrade piwigo -u https://github.com/YunoHost-Apps/piwigo_ynh/tree/testing --debug
```

**More info regarding app packaging:** <https://yunohost.org/packaging_apps>
