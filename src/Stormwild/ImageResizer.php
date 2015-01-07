<?php
namespace Stormwild;

/**
 * Class ImageResizer
 * @package Stormwild
 */
class ImageResizer
{
    /**
     * @param $path string Path to the file
     * @param $width int New width
     * @param $height int New height
     * @return bool Returns true if resize is successful, false otherwise
     */
    public static function resize($path, $width, $height)
    {
        list($w, $h, $t) = getimagesize($path);

        $done = false;

        switch ($t) {
            case IMAGETYPE_JPEG:
                $src = imagecreatefromjpeg($path);
                $dst = imagecreatetruecolor($width, $height);
                imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $w, $h);
                $done = imagejpeg($dst, $path);
                break;
            case IMAGETYPE_GIF:
                $src = imagecreatefromgif($path);
                $dst = imagecreatetruecolor($width, $height);
                imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $w, $h);
                $done = imagegif($dst, $path);
                break;
            case IMAGETYPE_PNG:
                $src = imagecreatefrompng($path);
                $dst = imagecreatetruecolor($width, $height);
                imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $w, $h);
                $done = imagepng($dst, $path);
                break;
        }

        imagedestroy($dst);

        return $done;
    }
}
