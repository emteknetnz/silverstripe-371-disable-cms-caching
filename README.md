# Silverstripe 3.7.1 disable CMS caching

## Introduction
This module is to fix a bug where caching wasn't fully disabled in the CMS
This could lead to some weird edge cases.  This will be fixed in version 3.7.2

See https://github.com/silverstripe/silverstripe-framework/pull/8318

Remove this module if upgrading a site to 3.7.2 or greater

## Installation
composer require emteknetnz/silverstripe-371-disable-cms-caching:^1
