## Wordpress via Pagoda Box

Deploy Wordpress *literally* three seconds. Embrace the PaaS-ness. Wordpress
3.6 cocked, locked, and ready to rock.

## What?

This is a Wordpress base intended to be deployed onto [Pagoda
Box](https://pagodabox.com/), a robust PHP Platform-as-a-Service provider.
Because of this, there are few differences from a typical Wordpress install.

* There can be no file changes once the app is deployed. Any updates (theme
  changes, plugin installs/upgrades, Wordpress upgrades) must happen locally
  first. Once the code is committed and pushed, then the app will be deployed.
* Production database access can only happen inside the infrastructure sandbox.
  Otherwise, you will have to
  [tunnel in](http://help.pagodabox.com/customer/portal/articles/175427) to use
  e.g. MySQL Workbench.

### Getting Started

* Fork this this repo, drop your plugins into `www/plugins` and themes into
  `www/themes`, and deploy to Pagoda Box. Real Simple Stuff.

#### Via creating a new app

* Add a New Application in your Pagoda Box dashboard
* Select "Clone an existing repo"
* Give it a great name.
* Enter `https://github.com/bvalosek/pagodabox-wordpress.git` as the "Clone URL"
* Let the infastructure build.
* Clone your app locally `git clone git@git.pagodabox.com:my-app-name.git`
* All subsequent pushes will re-deploy your site.

### Folder Structure

The Wordpress site is hosted out of the `www` directory. This is the
`document_root` for the first web component on Pagoda Box.

The `wp-config.php`, `index.php`, and `.htaccess` are all setup to allow for a
slightly different organization of the Wordpress files. This is all done to
make the directory structure a little more obvious, as well as not require you
to drop your files into the framework directory.

Here is the setup inside the `www` directory:

* `plugins/`: New location for all plugins. Relocated `wp-content/plugins`
  directory. Put all plugins here.
* `themes/`: New location for all themes. Relocated `wp-content/themes`
  directory. Put all themes here.
* `uploads/`: Uploaded media location. **NOTE** This directory is the only
  writable directory once deployed to Pagoda Box. Nothing in this directory
  will appear in the deployed application as it serves as the mount point for
  the NFS that is the shared storage across all the web components of the app.
  **Don't put anything in here**
* `wordpress/`: This is the Wordpress framework straight from the Zip file.
  **DO NOT** modify anything in this directory. To allow for cleaner updates
  and more transparency into code changes, the plugins and themes directory
  have been moved outside of the framework directory.

### TL;DR

Put all plugins in `www/plugins`, all themes in `www/themes`, and
don't touch anything else. Deploy your site with zero down time and hassle-free
vertical or horizontal scaling.
