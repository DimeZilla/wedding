# ACF JSON Exporter / Importer

This Plugin does two thins:
  1. It hides the Custom Fields admin menu if the user is not an administrator.
  2. It creates a directory called `acf-config` in the `WP_CONTENT_DIR`. This directory will save all configuration of fields.

## Requirements
  - Advanced Custom Fields Pro
  - PHP 7.0

## How to use
Track the `acf-config` directory and its files in git to pass configuration to your deployment sites. When you push the configuration, log into the production or staging site, navigate to "Custom Feilds" and under the "Field Groups" title, you should see a "Sync" available when its available. For more information see the ACF [documentation here](https://www.advancedcustomfields.com/resources/local-json/).

## About the Authors
We are Rad Developers that build Rad websites. We like Advanced Custom Fields Pro for all of our WordPress websites.

## Why this plugin?
Well, we use git. And build our websites locally first. So we needed a way to configure Advanced Custom Fields Pro to export its form settings in a way that we can version control and send to our deployment sites.
This plugin also handles the administrative controls over the plugin so that downstream admin users can't mess with all of our hard fields work!
