<?php

namespace Msgframework\Lib\Event;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Interface to be implemented by classes depending on a dispatcher.
 *
 */
interface DispatcherAwareInterface
{
	/**
	 * Set the dispatcher to use.
	 *
	 * @param   EventDispatcherInterface  $dispatcher  The dispatcher to use.
	 *
	 * @return  $this  This method is chainable.
	 *
	 */
	public function setDispatcher(EventDispatcherInterface $dispatcher): self;
}
