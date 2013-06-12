<?php namespace App\Services;

use File, Log;

class Image {

	/**
	 * Type of library to use, defaults to GD
	 * @var string
	 */
	protected $library = 'imagick';

	/**
	 * Instance of Imagine package
	 * @var Imagine\Gd\Imagine
	 */
	protected $imagine;

	/**
	 * Always force overwriting of files
	 * @var boolean
	 */
	public $overwrite = false;

	/**
	 * Quality of compression
	 * @var integer
	 */
	public $quality = 85;

	/**
	 * Initialize image service
	 * @return void
	 */
	public function __construct($library = null)
	{
		if ( ! $this->imagine)
		{
			$this->library = $library ? $library : null;

			// Use image magick if available
			if ( ! $this->library and class_exists('Imagick')) $this->library = 'imagick';
			else                                               $this->library = 'gd';

			// Now create instance
			if     ($this->library == 'imagick') $this->imagine = new \Imagine\Imagick\Imagine();
			elseif ($this->library == 'gmagick') $this->imagine = new \Imagine\Gmagick\Imagine();
			elseif ($this->library == 'gd')      $this->imagine = new \Imagine\Gd\Imagine();
			else                                 $this->imagine = new \Imagine\Gd\Imagine();
		}
	}

	/**
	 * Resize an image
	 * @param  string  $url
	 * @param  integer $width
	 * @param  integer $height
	 * @param  boolean $crop
	 * @return string
	 */
	public function resize($url, $width = 100, $height = null, $crop = false, $quality = null)
	{
		if ($url)
		{
			// URL info
			$info = pathinfo($url);

			// The size
			if ( ! $height) $height = $width;

			// Quality
			$quality = ($quality) ? $quality : $this->quality;

			// Directories and file names
			$fileName       = $info['basename'];
			$sourceDirPath  = public_path() . $info['dirname'];
			$sourceFilePath = $sourceDirPath . '/' . $fileName;
			$targetDirName  = $width . 'x' . $height . ($crop ? '_crop' : '');
			$targetDirPath  = $sourceDirPath . '/' . $targetDirName . '/';
			$targetFilePath = $targetDirPath . $fileName;
			$targetUrl      = asset($info['dirname'] . '/' . $targetDirName . '/' . $fileName);

			// Create directory if missing
			try
			{
				// Create dir if missing
				if ( ! File::isDirectory($targetDirPath) and $targetDirPath) @File::makeDirectory($targetDirPath);

				// Set the size
				$size = new \Imagine\Image\Box($width, $height);

				// Now the mode
				$mode = $crop ? \Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND : \Imagine\Image\ImageInterface::THUMBNAIL_INSET;

				if ($this->overwrite or ! File::exists($targetFilePath) or (File::lastModified($targetFilePath) < File::lastModified($sourceFilePath)))
				{
					$this->imagine->open($sourceFilePath)
					              ->thumbnail($size, $mode)
					              ->save($targetFilePath, array('quality' => $quality));
				}
			}
			catch (\Exception $e)
			{
				Log::error('[IMAGE SERVICE] Failed to resize image "' . $url . '" [' . $e->getMessage() . ']');
			}

			return $targetUrl;
		}
	}

	/**
	 * Helper for creating thumbs
	 * @param  string  $url
	 * @param  integer $width
	 * @param  integer $height
	 * @return string
	 */
	public function thumb($url, $width, $height = null)
	{
		return $this->resize($url, $width, $height, true);
	}

	/**
	 * Upload an image to the public storage
	 * @param  File $file
	 * @return string
	 */
	public function upload($file, $dir = null)
	{
		if ($file)
		{
			// Generate random dir
			if ( ! $dir) $dir = str_random(8);

			// Get file info and try to move
			$destination = public_path() .  '/uploads/' . $dir;
			$filename    = $file->getClientOriginalName();
			$path        = '/uploads/' . $dir . '/' . $filename;
			$uploaded    = $file->move($destination, $filename);

			if ($uploaded) return $path;
		}
	}

}
