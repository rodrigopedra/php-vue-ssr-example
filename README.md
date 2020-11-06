# PHP Vue SSR Minimal Example

This repository provides a minimal example on SSR with PHP and Vue.

The goal is have minimal moving parts to make understanding 
the requirements for SSR easier to grasp.

I do not recommend using this repository as a startting point to build
a larger PHP application with Vue's SSR.

This example uses this package for handling Vue's SSR:

https://github.com/spatie/server-side-rendering

The `spatie/server-side-rendering` package requires PHP to be installed 
on version 7.0 or greater.

Besides requiring PHP and composer installed, this example requires node.js 
to be installed.

The node.js version used to built this example was node.js 12 LTS.

On the end of this README document there are links to articles 
I found useful when first using Vue's SSR with PHP. 

## Installation

Run:

~~~
composer install
npm ci
npm run prod
./run.sh
~~~

Visit:
 
http://localhost:8000

## Caveats

Maybe you will need to edit `./public/index.php` and replace with your local 
node.js installation path.

To find out what is your node.js installation path run the command below 
(works on Linux, and probably on macOS):

~~~
which node
~~~

Then replace it on `./public/index.php` in the line with a corresponding comment.

This repository was not tested on Windows. To run on Windows you might need 
to provide both your node.js executable path and a temporary directory path
on `./public/index.php`. 

## Further Reading

Anthony Gore published a nice article that outlines how Vue SSR works:

https://vuejsdevelopers.com/2017/11/06/vue-js-laravel-server-side-rendering/

The PHP (with Laravel) part from that article does not use the package 
used in this example.

Read this article, from one of the `spatie/server-side-rendering` package 
creators to learn more on using the package with PHP:

https://sebastiandedeyne.com/server-side-rendering-javascript-from-php/

Additionally, The `spatie/server-side-rendering` package creators provide 
a more complete example, with more features (including using React) at:

https://github.com/spatie/laravel-server-side-rendering-examples

Lastly, don't skip reading Vue's offical docs about SSR:

https://ssr.vuejs.org/

Specially this section, that compares SSR to prerendering:

https://ssr.vuejs.org/#ssr-vs-prerendering
