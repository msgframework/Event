<?php

namespace Msgframework\Lib\Event;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Defines the trait for a Dispatcher Aware Class.
 *
 */
trait DispatcherAwareTrait
{
	/**
	 * Event Dispatcher
	 *
	 * @var    EventDispatcherInterface
	 */
	private EventDispatcherInterface $dispatcher;

	/**
	 * Get the event dispatcher.
	 *
	 * @return  EventDispatcherInterface
	 *
	 * @throws  \UnexpectedValueException May be thrown if the dispatcher has not been set.
	 */
	public function getDispatcher(): EventDispatcherInterface
	{
		if (!isset($this->dispatcher))
		{
            throw new \UnexpectedValueException('Dispatcher not set in ' . __CLASS__);
		}

        return $this->dispatcher;
	}

	/**
	 * Set the dispatcher to use.
	 *
	 * @param   EventDispatcherInterface  $dispatcher  The dispatcher to use.
	 *
	 * @return  $this
	 *
	 */
	public function setDispatcher(EventDispatcherInterface $dispatcher): self
	{
		$this->dispatcher = $dispatcher;

		return $this;
	}
}
