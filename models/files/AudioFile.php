<?php namespace Unistorage;

/**
 * @property-read string $codec
 * @property-read int $length
 */
class AudioFile extends RegularFile
{
	/**
	 * @var string
	 */
	protected $codec;

	/**
	 * @var int in seconds
	 */
	protected $length;

	public function getCodec()
	{
		return $this->codec;
	}

	public function getLength()
	{
		return $this->length;
	}

	/**
	 * @param Unistorage $unistorage
	 * @param string $format
	 * @return File
	 */
	public function convert($unistorage, $format)
	{
		return $unistorage->applyAction($this, RegularFile::ACTION_CONVERT, array(
			'to' => $format,
		));
	}
}
