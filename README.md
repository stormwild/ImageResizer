ImageResizer
============

PHP class to resize images using GD

History
-------

Although, I used a version of this class in a recent project, this is really just an exercise for me to create a simple PHP class library shared through Composer and Packagist.

Setup
-----

This package is available through Packagist with the vendor and package identifier the same as this repo.

If using [Composer](https://getcomposer.org/), in your `composer.json` file add:

```json
{
    "require": {
        "stormwild/image-resizer": "1.0.0"
    }
}
```

Otherwise:

```php
include '/path/to/ImageResizer.php';
```

Because this class uses namespacing, when instantiating the object, you need to either use the fully qualified namespace:

```php
$resized = \Stormwild\ImageResizer::resizer($path, $width, $height);
```

Or alias it:

```php

use \Stormwild\ImageResizer;

$resized = ImageResizer::resizer($path, $width, $height);
```

Usage
-----

```php
    // possibly in controller action
    // check if image uploaded successfully
    // get path to uploaded image
    
    $path = "path/to/uploaded/file.ext"; // real path to file on server
    $width = 1050;
    $height = 700;    
    
    $resized = ImageResizer::resize($path, $width, $height);
    
    if($resized) {
        // upload to cloud storage
        // get url from cloud
        // save model with reference to image url
    }
```

The function resizes and replaces(updates) the uploaded file to the specified dimensions.

References
----------

Credits to the many code samples on image resizing using GD on the web. In particular, I referenced the following:   

* http://stackoverflow.com/questions/14649645/resize-image-in-php/14649689#14649689
* http://stackoverflow.com/posts/14649689/revisions
* https://github.com/eventviva/php-image-resize



