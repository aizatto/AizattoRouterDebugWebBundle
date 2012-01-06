README
======

For the lazy. Instead of running "php app/console router:debug", just view the
routes in the browser.

Installation
------------

### Install source code

You have two options to install the source code.

* deps file
* git submodules

#### Install via deps

Add into your deps file

<pre>
[AizattoRouterDebugWebBundle]
     git=http://github.com/aizatto/AizattoRouterDebugWebBundle.git
     target=/bundles/Aizatto/Bundle/RouterDebugWebBundle
</pre>

Execute vendor update script:

<pre>
php bin/vendors update
</pre>

#### Install via git submodules

Execute git submodule add command:

<pre>
git submodule add \
  http://github.com/aizatto/AizattoRouterDebugWebBundle.git \
  vendor/bundles/Aizatto/Bundle/RouterDebugWebBundle
</pre>

### Install into AppKernel

Edit your AppKernel (app/AppKernel.php), add the following line in the
'dev', and 'test' environment only Bundles.

<pre>
if (in_array($this->getEnvironment(), array('dev', 'test'))) {
  ...
  $bundles[] = new Aizatto\Bundle\RouterDebugWebBundle\RouterDebugWebBundle();
  ...
}
</pre>

### Install into autoload

Edit app/autoload.php, and add the register the namespace "Aizatto":

<pre>
$loader->registerNamespaces(array(
  'Aizatto' => __DIR__.'/../vendor/bundles',
))
</pre>


### Install routes

Add the necessary route.

In app/config/routing.yml:

<pre>
AizattoRouterDebugWebBundle:
    resource: "@RouterDebugWebBundle/Controller/"
    type:     annotation
    prefix:   /_router/debug
</pre>

Then visit in your brower http://localhost/_router/debug
