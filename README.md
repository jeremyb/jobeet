Jobeet with Symfony2
====================

This is a derivative work of the original <a href="http://http://www.symfony-project.org/jobeet/1_4/Doctrine/en/">Jobeet tutorial</a> by Fabien Potencier and Jonathan Wage for the Symfony2 framework.

This is a project to follow along the Jobeet Tutorial on Symfony2.

It's an attempt to port the Jobeet Tutorial to Symfony2, and it's not considered
official in any way.

I'm not related to Sensio Labs, and this tutorial is not part of any official
documentation (at least, not yet :) ).

It's not finished, far from it. It's still a work in progress. It's based on
Symfony Standard Edition PR7, and I will be updating vendors as new releases come
out.

## Install

### Get the code

    git clone git://github.com/symfonytuts/jobeet.git
    cd jobeet
    git submodule update --init --recursive

The last command requires Git >= 1.6. Alternatively, you can run `git submodule init` and `git submodule update`.

### Configure

The configuration is very similar to "Symfony Standard Edition" distribution.

You need to build the Symfony bootstrap:

    ./bin/build_bootstrap.php

And to install the assets:

    app/console assets:install --symlink web/

To configure your database settings, you can edit the `parameters.ini` file:

    cp app/config/parameters.ini.dist app/config/parameters.ini

Or just accessing `config.php` in a browser and follow the instructions.

#### Create database and tables

    php app/console doctrine:database:create
    php app/console doctrine:schema:create
