# Jigsaw Casper


This is a starter template for creating a blog with [Jigsaw](https://jigsaw.tighten.co/). Jigsaw Casper, is a port of the default [Ghost](https://ghost.org/) theme - [Casper](https://github.com/TryGhost/Casper), just change a few settings and you are ready to go.
 
See a preview of the blog template [here](https://jigsaw-casper.netlify.com/).

## What's included

This fully-responsive starter template includes some sample pages and comes pre configured with:

* Syntax highlighting
* Support for tagging
* Social sharing
* A script that automatically generates a `sitemap.xml`
* A script that automatically generates an RSS feed
* A custom 404 page
* [Tinyletter](https://tinyletter.com/) subscribe form

---

![Jigsaw Casper Screenshot](./screenshot.png?raw=true "Jigsaw Casper")

---

## Installation

### System Requirements
To use Jigsaw, you need to have PHP 7 and Composer installed on your machine. You'll also need Node.js, NPM and Yarn installed in order to use Laravel Mix to compile the CSS and Javascript.

### Getting Started
Jigsaw now supports the installation of third party starter templates, so you can get up and running in 3 quick easy steps:

1. Create the project directory
   
    ``` bash 
    mkdir my-cool-blog
    ```

2. Install Jigsaw via Composer
   
   ``` bash 
    cd my-cool-blog
    composer require tightenco/jigsaw
    ```
3. Initialize your project
    
    ``` bash 
        ./vendor/bin/jigsaw init rickwest/jigsaw-casper
    ```

Now that you have everything installed, you can serve the site using PHP ``` ./vendor/bin/jigsaw serve ``` or alternatively, using Browsersync ``` yarn run watch ```
    
For more help [getting started](https://jigsaw.tighten.co/docs/installation/), be sure to check out the official documentation. It really is good!

--- 

### Configuring your site

Anything you add to the array in ```config.php``` will be made available in all of your templates, as a property of the ```$page``` object.

This project uses some of these site variables in several of the templates, for example, the ```siteName``` is used in both the header and footer.

Quickly customise your site by adding your site name, email address and social media profiles ```in config.php```. Take a look at the [Jigsaw documentation](https://jigsaw.tighten.co/docs/site-variables/) to learn more.

---

### Adding Content

You can write your content using a [variety of file types](http://jigsaw.tighten.co/docs/content-other-file-types/). By default, this starter template expects your content to be located in the `source/_posts/` folder.

The top of each content page contains a YAML header that specifies how it should be rendered. The `title` attribute is used to dynamically generate HTML `title` and OpenGraph tags for each page. The `extends` attribute defines which parent Blade layout this content file will render with (e.g. `_layouts.post` will render with `source/_layouts/post.blade.php`), and the `section` attribute defines the Blade "section" that expects this content to be placed into it.

``` yaml
extends: _layouts.post
section: content
title: Getting Started
date: 2019-01-21
description: Getting started with the Jigsaw blog starter template
image: /assets/images/post-bg.jpg
```

---

### Adding and Editing Pages
Get started by editing the 'about' page, that comes with this project. Open up ```about.blade.php``` that's in the ```_source``` folder and add some interesting info about yourself!

Adding a new page to your site is as simple as creating a new blade template in the ```_source``` directory.

Jigsaw gives you access to all the templating features and control structures of Blade that are available in Laravel.

The comprehensive, official blade documentation is available [here](https://laravel.com/docs/5.6/blade). 

---

## Bugs and Issues

If you encounter a problem or spot a mistake, or even if you would just like to make a suggestion, please open an issue. Pull requests are more than welcome too! 

---

## Contributing

- Fork it (https://github.com/yourname/yourproject/fork)
- Create your feature branch (git checkout -b feature/fooBar)
- Commit your changes (git commit -am 'Add some fooBar')
- Push to the branch (git push origin feature/fooBar)
- Create a new Pull Request

---

## Copyright and License

This project is licensed under the [MIT](https://choosealicense.com/licenses/mit/) License.