# ImageResizer
PHP class to resize images using GD

## Note
This is just an exercise for me to create a simple PHP class library shared through composer.

## Usage
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

## References
Credits to the many code samples on image resizing using GD on the web. In particular, I referenced the following:   

* http://stackoverflow.com/questions/14649645/resize-image-in-php/14649689#14649689
* http://stackoverflow.com/posts/14649689/revisions
* https://github.com/eventviva/php-image-resize



