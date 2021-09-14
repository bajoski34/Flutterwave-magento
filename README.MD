# Flutterwave Magento Module

Make collections with the offical flutterwave package on your Magento Site.

## Requirements

- Existing Magento2x installation on your web server.
- Go to Flutterwave Live to get your LIVE public and private key
- Go to Flutterwave Test to get your TEST public and private key
- Download the latest plugin from the latest release page.
- Take payments on your magento 2 store using Flutterwave.

## Support for:

- Credit card
- Debit card
- Bank account

## Install

###

### Composer

`composer require flutterwave/module-payment`

### Manual Installation

- Click the Download Zip button and save to your local machine.
- Unpack(Extract) the archive.
- Create a **Flutterwave/Payment** folder in your Magento's **app/code** directory.
- Copy the content into your Magento's **app/code/Flutterwave/Payments** directory.

### Enable the Flutterwave Payments module:

- From your commandline, in your magento root directory, run

```bash
php bin/magento module:enable Flutterwave_Payment --clear-static-content
php bin/magento setup:upgrade
php bin/magento setup:di:compile
```

- Once the `setup:upgrade` completes the module will be available in the Store Admin.

### Configure the plugin

Configuration can be done using the Administrator section of your Magento store.
